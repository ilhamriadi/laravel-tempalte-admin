<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class AdminForumController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Display admin forums dashboard.
     */
    public function index(): View
    {
        $stats = [
            'total_forums' => Forum::count(),
            'active_forums' => Forum::where('is_active', true)->count(),
            'total_threads' => Thread::count(),
            'total_posts' => Thread::withCount('comments')->get()->sum('comments_count') + Thread::count(),
        ];

        $recentForums = Forum::latest()->take(5)->get();
        $popularForums = Forum::withCount(['threads' => function ($query) {
            $query->where('created_at', '>=', now()->subDays(30));
        }])
        ->orderBy('threads_count', 'desc')
        ->take(5)
        ->get();

        $forumCategories = Forum::select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->orderBy('count', 'desc')
            ->get();

        return view('admin.forums.index', compact(
            'stats',
            'recentForums',
            'popularForums',
            'forumCategories'
        ));
    }

    /**
     * Display all forums for management.
     */
    public function forums(Request $request): View
    {
        $query = Forum::withCount(['threads', 'threads as recent_threads_count' => function ($query) {
            $query->where('created_at', '>=', now()->subDays(7));
        }]);

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $forums = $query->orderBy('sort_order')->orderBy('name')->paginate(20);

        $categories = Forum::distinct()->pluck('category');

        return view('admin.forums.forums', compact('forums', 'categories'));
    }

    /**
     * Store a new forum.
     */
    public function storeForum(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:forums,name',
            'description' => 'nullable|string|max:1000',
            'category' => 'required|string|max:50',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $forum = Forum::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Forum created successfully',
            'forum' => $forum,
        ]);
    }

    /**
     * Update a forum.
     */
    public function updateForum(Request $request, Forum $forum): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:forums,name,' . $forum->id,
            'description' => 'nullable|string|max:1000',
            'category' => 'required|string|max:50',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $forum->update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'sort_order' => $request->sort_order,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Forum updated successfully',
            'forum' => $forum,
        ]);
    }

    /**
     * Toggle forum status.
     */
    public function toggleForumStatus(Forum $forum): JsonResponse
    {
        $forum->update(['is_active' => !$forum->is_active]);

        return response()->json([
            'success' => true,
            'message' => $forum->is_active ? 'Forum activated' : 'Forum deactivated',
            'is_active' => $forum->is_active,
        ]);
    }

    /**
     * Delete a forum.
     */
    public function deleteForum(Forum $forum): JsonResponse
    {
        // Check if forum has threads
        $threadCount = $forum->threads()->count();
        if ($threadCount > 0) {
            return response()->json([
                'success' => false,
                'message' => "Cannot delete forum with {$threadCount} threads. Please move or delete the threads first.",
            ], 422);
        }

        $forum->delete();

        return response()->json([
            'success' => true,
            'message' => 'Forum deleted successfully',
        ]);
    }

    /**
     * Display forum threads for moderation.
     */
    public function threads(Request $request, Forum $forum = null): View
    {
        $query = Thread::with(['user', 'forum'])
            ->withCount(['comments', 'likes'])
            ->with(['user' => function ($q) {
                $q->select('id', 'name', 'email');
            }])
            ->with(['forum' => function ($q) {
                $q->select('id', 'name', 'slug');
            }]);

        if ($forum) {
            $query->where('forum_id', $forum->id);
        }

        // Filters
        if ($request->filled('status')) {
            switch ($request->status) {
                case 'pinned':
                    $query->where('is_pinned', true);
                    break;
                case 'locked':
                    $query->where('is_locked', true);
                    break;
                case 'reported':
                    // TODO: Implement reporting system
                    break;
            }
        }

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Date range
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $threads = $query->latest()->paginate(20);
        $forums = Forum::orderBy('name')->pluck('name', 'id');
        $users = User::orderBy('name')->pluck('name', 'id');

        return view('admin.forums.threads', compact(
            'threads',
            'forums',
            'users',
            'forum'
        ));
    }

    /**
     * Bulk operations on threads.
     */
    public function bulkThreadAction(Request $request): JsonResponse
    {
        $request->validate([
            'thread_ids' => 'required|array',
            'thread_ids.*' => 'exists:threads,id',
            'action' => 'required|in:pin,unpin,lock,unlock,delete',
        ]);

        $threadIds = $request->thread_ids;
        $action = $request->action;

        $updated = 0;
        $deleted = 0;

        foreach ($threadIds as $threadId) {
            $thread = Thread::find($threadId);
            if (!$thread) continue;

            switch ($action) {
                case 'pin':
                    $thread->update(['is_pinned' => true]);
                    $updated++;
                    break;
                case 'unpin':
                    $thread->update(['is_pinned' => false]);
                    $updated++;
                    break;
                case 'lock':
                    $thread->update(['is_locked' => true]);
                    $updated++;
                    break;
                case 'unlock':
                    $thread->update(['is_locked' => false]);
                    $updated++;
                    break;
                case 'delete':
                    $thread->delete();
                    $deleted++;
                    break;
            }
        }

        $message = $deleted > 0
            ? "Successfully deleted {$deleted} thread(s)"
            : "Successfully updated {$updated} thread(s)";

        return response()->json([
            'success' => true,
            'message' => $message,
            'updated' => $updated,
            'deleted' => $deleted,
        ]);
    }

    /**
     * Get forum statistics for charts.
     */
    public function getStatistics(Request $request): JsonResponse
    {
        $period = $request->period ?? '30days'; // 7days, 30days, 90days, 1year

        $startDate = match($period) {
            '7days' => now()->subDays(7),
            '30days' => now()->subDays(30),
            '90days' => now()->subDays(90),
            '1year' => now()->subYear(),
            default => now()->subDays(30),
        };

        // Thread creation trends
        $threadTrends = Thread::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Posts creation trends (threads + comments)
        $postsTrends = Thread::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Add comments to posts trends
        $commentsTrends = \App\Models\Comment::where('created_at', '>=', $startDate)
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Merge threads and comments
        $postsData = [];
        $threadData = $threadTrends->pluck('count', 'date')->toArray();
        $commentData = $commentsTrends->pluck('count', 'date')->toArray();

        $allDates = array_unique(array_merge(
            array_keys($threadData),
            array_keys($commentData)
        ));

        sort($allDates);

        foreach ($allDates as $date) {
            $postsData[] = [
                'date' => $date,
                'threads' => $threadData[$date] ?? 0,
                'comments' => $commentData[$date] ?? 0,
                'total' => ($threadData[$date] ?? 0) + ($commentData[$date] ?? 0),
            ];
        }

        // Forum activity by category
        $categoryActivity = Forum::with(['threads' => function ($query) use ($startDate) {
            $query->where('created_at', '>=', $startDate);
        }])
        ->get()
        ->map(function ($forum) {
            return [
                'category' => $forum->category,
                'threads' => $forum->threads->count(),
                'name' => $forum->name,
            ];
        })
        ->groupBy('category')
        ->map(function ($items) {
            return [
                'category' => $items->first()['category'],
                'threads' => $items->sum('threads'),
                'forums' => $items->count(),
            ];
        })
        ->values();

        return response()->json([
            'thread_trends' => $threadTrends,
            'posts_trends' => $postsData,
            'category_activity' => $categoryActivity,
            'period' => $period,
        ]);
    }
}