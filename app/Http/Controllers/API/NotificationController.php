<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\NotificationPreference;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Get user's notifications.
     */
    public function index(Request $request): JsonResponse
    {
        $user = auth()->user();

        $query = $user->notifications()->latest();

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Filter by read status
        if ($request->filled('read')) {
            if ($request->boolean('read')) {
                $query->whereNotNull('read_at');
            } else {
                $query->whereNull('read_at');
            }
        }

        $notifications = $query->paginate($request->input('per_page', 20));

        return response()->json([
            'success' => true,
            'data' => [
                'notifications' => $notifications->map(function ($notification) {
                    return [
                        'id' => $notification->id,
                        'type' => $notification->type,
                        'title' => $notification->data['title'] ?? 'Notification',
                        'message' => $notification->data['message'] ?? '',
                        'url' => $notification->data['url'] ?? null,
                        'data' => $notification->data,
                        'read_at' => $notification->read_at,
                        'created_at' => $notification->created_at,
                        'time_ago' => $notification->created_at->diffForHumans(),
                    ];
                }),
                'unread_count' => $user->unreadNotifications()->count(),
            ],
            'meta' => [
                'total' => $notifications->total(),
                'per_page' => $notifications->perPage(),
                'current_page' => $notifications->currentPage(),
                'last_page' => $notifications->lastPage(),
                'has_more_pages' => $notifications->hasMorePages(),
            ],
        ]);
    }

    /**
     * Mark notification as read.
     */
    public function markAsRead(Request $request, $id = null): JsonResponse
    {
        $user = auth()->user();

        if ($id) {
            // Mark specific notification as read
            $notification = $user->notifications()->findOrFail($id);
            $notification->markAsRead();

            return response()->json([
                'success' => true,
                'message' => 'Notification marked as read',
                'unread_count' => $user->unreadNotifications()->count(),
            ]);
        } else {
            // Mark all notifications as read
            $user->notifications()->whereNull('read_at')->update([
                'read_at' => now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'All notifications marked as read',
                'unread_count' => 0,
            ]);
        }
    }

    /**
     * Mark notification as unread.
     */
    public function markAsUnread(Request $request, $id): JsonResponse
    {
        $user = auth()->user();

        $notification = $user->notifications()->findOrFail($id);
        $notification->update(['read_at' => null]);

        return response()->json([
            'success' => true,
            'message' => 'Notification marked as unread',
            'unread_count' => $user->unreadNotifications()->count(),
        ]);
    }

    /**
     * Delete a notification.
     */
    public function destroy(Request $request, $id = null): JsonResponse
    {
        $user = auth()->user();

        if ($id) {
            // Delete specific notification
            $notification = $user->notifications()->findOrFail($id);
            $notification->delete();

            return response()->json([
                'success' => true,
                'message' => 'Notification deleted',
                'unread_count' => $user->unreadNotifications()->count(),
            ]);
        } else {
            // Delete read notifications
            $deleted = $user->notifications()->whereNotNull('read_at')->delete();

            return response()->json([
                'success' => true,
                'message' => "Deleted {$deleted} read notifications",
                'unread_count' => $user->unreadNotifications()->count(),
            ]);
        }
    }

    /**
     * Get notification preferences.
     */
    public function getPreferences(): JsonResponse
    {
        $user = auth()->user();

        $preferences = [];
        $defaultTypes = NotificationPreference::getDefaultTypes();

        foreach ($defaultTypes as $type) {
            $preference = $user->notificationPreferences()->where('type', $type)->first();
            $preferences[$type] = [
                'email_enabled' => $preference->email_enabled ?? true,
                'push_enabled' => $preference->push_enabled ?? true,
            ];
        }

        return response()->json([
            'success' => true,
            'data' => [
                'preferences' => $preferences,
                'available_types' => $defaultTypes,
            ],
        ]);
    }

    /**
     * Update notification preferences.
     */
    public function updatePreferences(Request $request): JsonResponse
    {
        $request->validate([
            'preferences' => 'required|array',
            'preferences.*.email_enabled' => 'required|boolean',
            'preferences.*.push_enabled' => 'required|boolean',
        ]);

        $user = auth()->user();
        $updated = 0;

        foreach ($request->preferences as $type => $settings) {
            $preference = $user->notificationPreferences()->where('type', $type)->first();
            if ($preference) {
                $preference->update($settings);
                $updated++;
            } else {
                $user->notificationPreferences()->create([
                    'type' => $type,
                    'email_enabled' => $settings['email_enabled'],
                    'push_enabled' => $settings['push_enabled'],
                ]);
                $updated++;
            }
        }

        return response()->json([
            'success' => true,
            'message' => "Updated {$updated} notification preferences",
        ]);
    }

    /**
     * Get unread notifications count.
     */
    public function getUnreadCount(): JsonResponse
    {
        $user = auth()->user();

        return response()->json([
            'success' => true,
            'data' => [
                'unread_count' => $user->unreadNotifications()->count(),
            ],
        ]);
    }

    /**
     * Mark notifications as read in bulk.
     */
    public function bulkMarkAsRead(Request $request): JsonResponse
    {
        $request->validate([
            'notification_ids' => 'required|array',
            'notification_ids.*' => 'string',
        ]);

        $user = auth()->user();
        $notificationIds = $request->notification_ids;

        $updated = $user->notifications()
            ->whereIn('id', $notificationIds)
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        return response()->json([
            'success' => true,
            'message' => "Marked {$updated} notifications as read",
            'unread_count' => $user->unreadNotifications()->count(),
        ]);
    }

    /**
     * Delete notifications in bulk.
     */
    public function bulkDelete(Request $request): JsonResponse
    {
        $request->validate([
            'notification_ids' => 'required|array',
            'notification_ids.*' => 'string',
        ]);

        $user = auth()->user();
        $notificationIds = $request->notification_ids;

        $deleted = $user->notifications()
            ->whereIn('id', $notificationIds)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => "Deleted {$deleted} notifications",
            'unread_count' => $user->unreadNotifications()->count(),
        ]);
    }

    /**
     * Get notification statistics.
     */
    public function getStatistics(): JsonResponse
    {
        $user = auth()->user();

        $stats = [
            'total_notifications' => $user->notifications()->count(),
            'unread_notifications' => $user->unreadNotifications()->count(),
            'read_notifications' => $user->readNotifications()->count(),
        ];

        // Notifications by type
        $typeStats = $user->notifications()
            ->selectRaw('type, COUNT(*) as count')
            ->groupBy('type')
            ->get()
            ->pluck('count', 'type')
            ->toArray();

        // Recent notifications (last 7 days)
        $recentStats = [
            'last_24_hours' => $user->notifications()
                ->where('created_at', '>=', now()->subDay())
                ->count(),
            'last_7_days' => $user->notifications()
                ->where('created_at', '>=', now()->subDays(7))
                ->count(),
            'last_30_days' => $user->notifications()
                ->where('created_at', '>=', now()->subDays(30))
                ->count(),
        ];

        return response()->json([
            'success' => true,
            'data' => [
                'stats' => $stats,
                'type_stats' => $typeStats,
                'recent_stats' => $recentStats,
            ],
        ]);
    }
}