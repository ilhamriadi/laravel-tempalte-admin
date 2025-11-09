<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Display admin users dashboard.
     */
    public function index(): View
    {
        $stats = [
            'total_users' => User::count(),
            'active_users' => User::where('status', 'Active')->count(),
            'new_users_today' => User::whereDate('created_at', today())->count(),
            'new_users_this_month' => User::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
        ];

        $recentUsers = User::latest()->take(5)->get();
        $activeUsers = User::withCount(['threads', 'comments'])
            ->orderBy('threads_count', 'desc')
            ->orderBy('comments_count', 'desc')
            ->take(5)
            ->get();

        $userRoles = User::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->select('roles.name as role', DB::raw('count(*) as count'))
            ->groupBy('roles.name')
            ->get();

        return view('admin.users.index', compact(
            'stats',
            'recentUsers',
            'activeUsers',
            'userRoles'
        ));
    }

    /**
     * Display all users for management.
     */
    public function users(Request $request): View
    {
        $query = User::with(['roles', 'threads' => function ($query) {
            $query->select('id', 'user_id', 'created_at');
        }, 'comments' => function ($query) {
            $query->select('id', 'user_id', 'created_at');
        }])
        ->withCount(['threads', 'comments']);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by role
        if ($request->filled('role')) {
            $query->whereHas('roles', function ($q) use ($request) {
                $q->where('name', $request->role);
            });
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('user_id', 'like', "%{$search}%");
            });
        }

        // Date range
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Sort
        $sortBy = $request->input('sort_by', 'created_at');
        $sortOrder = $request->input('sort_order', 'desc');

        $allowedSorts = ['name', 'email', 'created_at', 'last_login', 'threads_count', 'comments_count'];
        $sortBy = in_array($sortBy, $allowedSorts) ? $sortBy : 'created_at';

        $users = $query->orderBy($sortBy, $sortOrder)->paginate(20);

        $roles = \Spatie\Permission\Models\Role::pluck('name', 'name');

        return view('admin.users.users', compact('users', 'roles'));
    }

    /**
     * Create a new user.
     */
    public function storeUser(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_name' => 'required|exists:roles,name',
            'status' => 'required|in:Active,Inactive,Banned',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_name' => $request->role_name,
            'status' => $request->status,
            'join_date' => now(),
        ]);

        // Assign role
        $user->assignRole($request->role_name);

        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'user' => $user->load('roles'),
        ]);
    }

    /**
     * Update a user.
     */
    public function updateUser(Request $request, User $user): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'role_name' => 'required|exists:roles,name',
            'status' => 'required|in:Active,Inactive,Banned',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_name' => $request->role_name,
            'status' => $request->status,
        ]);

        // Update role
        $user->syncRoles([$request->role_name]);

        // Update password if provided
        if ($request->filled('password')) {
            $request->validate(['password' => 'required|string|min:8']);
            $user->update(['password' => Hash::make($request->password)]);
        }

        return response()->json([
            'success' => true,
            'message' => 'User updated successfully',
            'user' => $user->load('roles'),
        ]);
    }

    /**
     * Toggle user status.
     */
    public function toggleUserStatus(User $user): JsonResponse
    {
        if ($user->hasRole('admin') && $user->id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot change status of admin users',
            ], 403);
        }

        $newStatus = match($user->status) {
            'Active' => 'Inactive',
            'Inactive' => 'Active',
            'Banned' => 'Active',
            default => 'Active',
        };

        $user->update(['status' => $newStatus]);

        return response()->json([
            'success' => true,
            'message' => "User status changed to {$newStatus}",
            'status' => $newStatus,
        ]);
    }

    /**
     * Ban/unban a user.
     */
    public function banUser(User $user): JsonResponse
    {
        if ($user->hasRole('admin')) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot ban admin users',
            ], 403);
        }

        $isBanned = $user->status === 'Banned';

        if ($isBanned) {
            $user->update(['status' => 'Active']);
            $message = 'User unbanned successfully';
        } else {
            $user->update(['status' => 'Banned']);
            $message = 'User banned successfully';
        }

        return response()->json([
            'success' => true,
            'message' => $message,
            'status' => $user->status,
        ]);
    }

    /**
     * Delete a user.
     */
    public function deleteUser(User $user): JsonResponse
    {
        if ($user->hasRole('admin')) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot delete admin users',
            ], 403);
        }

        if ($user->id === auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot delete your own account',
            ], 403);
        }

        // Check if user has content
        $contentCount = $user->threads()->count() + $user->comments()->count();
        if ($contentCount > 0) {
            return response()->json([
                'success' => false,
                'message' => "Cannot delete user with {$contentCount} posts. Please transfer or delete content first.",
            ], 422);
        }

        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully',
        ]);
    }

    /**
     * Get user details for modal.
     */
    public function getUserDetails(User $user): JsonResponse
    {
        $user->load([
            'roles',
            'threads' => function ($query) {
                $query->latest()->limit(5);
            },
            'comments' => function ($query) {
                $query->latest()->limit(5);
            }
        ]);

        $stats = [
            'threads_count' => $user->threads()->count(),
            'comments_count' => $user->comments()->count(),
            'likes_received' => $user->likes_received,
            'join_date' => $user->join_date_formatted,
            'last_login' => $user->last_login?->diffForHumans(),
        ];

        return response()->json([
            'success' => true,
            'user' => $user,
            'stats' => $stats,
        ]);
    }

    /**
     * Bulk operations on users.
     */
    public function bulkUserAction(Request $request): JsonResponse
    {
        $request->validate([
            'user_ids' => 'required|array',
            'user_ids.*' => 'exists:users,id',
            'action' => 'required|in:activate,deactivate,ban,unban,assign_role,remove_role',
            'role' => 'required_if:action,assign_role,remove_role|exists:roles,name',
        ]);

        $userIds = $request->user_ids;
        $action = $request->action;
        $role = $request->role;

        $updated = 0;
        $errors = [];

        foreach ($userIds as $userId) {
            $user = User::find($userId);
            if (!$user) continue;

            // Skip admin users for most actions
            if ($user->hasRole('admin') && in_array($action, ['ban', 'deactivate'])) {
                $errors[] = "Cannot perform this action on admin user: {$user->name}";
                continue;
            }

            // Skip self for destructive actions
            if ($user->id === auth()->id() && in_array($action, ['ban', 'deactivate', 'delete'])) {
                $errors[] = "Cannot perform this action on yourself";
                continue;
            }

            try {
                switch ($action) {
                    case 'activate':
                        $user->update(['status' => 'Active']);
                        $updated++;
                        break;
                    case 'deactivate':
                        $user->update(['status' => 'Inactive']);
                        $updated++;
                        break;
                    case 'ban':
                        $user->update(['status' => 'Banned']);
                        $updated++;
                        break;
                    case 'unban':
                        $user->update(['status' => 'Active']);
                        $updated++;
                        break;
                    case 'assign_role':
                        $user->assignRole($role);
                        $updated++;
                        break;
                    case 'remove_role':
                        $user->removeRole($role);
                        $updated++;
                        break;
                }
            } catch (\Exception $e) {
                $errors[] = "Error with user {$user->name}: " . $e->getMessage();
            }
        }

        $message = $updated > 0
            ? "Successfully processed {$updated} user(s)"
            : "No users were processed";

        return response()->json([
            'success' => true,
            'message' => $message,
            'updated' => $updated,
            'errors' => $errors,
        ]);
    }

    /**
     * Get user statistics for charts.
     */
    public function getStatistics(Request $request): JsonResponse
    {
        $period = $request->period ?? '30days';

        $startDate = match($period) {
            '7days' => now()->subDays(7),
            '30days' => now()->subDays(30),
            '90days' => now()->subDays(90),
            '1year' => now()->subYear(),
            default => now()->subDays(30),
        };

        // User registration trends
        $registrationTrends = User::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // User activity trends (threads + comments)
        $activityTrends = [];
        $threadActivity = Thread::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date')
            ->toArray();

        $commentActivity = Comment::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->pluck('count', 'date')
            ->toArray();

        $allDates = array_unique(array_merge(
            array_keys($threadActivity),
            array_keys($commentActivity)
        ));

        sort($allDates);

        foreach ($allDates as $date) {
            $activityTrends[] = [
                'date' => $date,
                'threads' => $threadActivity[$date] ?? 0,
                'comments' => $commentActivity[$date] ?? 0,
                'total' => ($threadActivity[$date] ?? 0) + ($commentActivity[$date] ?? 0),
            ];
        }

        // User roles distribution
        $roleDistribution = User::join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->select('roles.name', DB::raw('count(*) as count'))
            ->groupBy('roles.name')
            ->orderBy('count', 'desc')
            ->get();

        // User status distribution
        $statusDistribution = User::select('status', DB::raw('count(*) as count'))
            ->groupBy('status')
            ->orderBy('count', 'desc')
            ->get();

        return response()->json([
            'registration_trends' => $registrationTrends,
            'activity_trends' => $activityTrends,
            'role_distribution' => $roleDistribution,
            'status_distribution' => $statusDistribution,
            'period' => $period,
        ]);
    }
}