<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ForumController;
use App\Http\Controllers\API\ThreadController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\GroupController;
use App\Http\Controllers\API\LikeController;
use App\Http\Controllers\API\VoteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Forum Routes
Route::apiResource('forums', ForumController::class)->parameters([
    'forums' => 'forum',
]);

Route::prefix('forums/{forum}')->group(function () {
    Route::get('threads', [ThreadController::class, 'index']);
});

// Thread Routes
Route::apiResource('threads', ThreadController::class)->parameters([
    'threads' => 'thread',
]);

Route::prefix('threads/{thread}')->group(function () {
    Route::post('pin', [ThreadController::class, 'pin'])->middleware('permission:pin-threads');
    Route::post('lock', [ThreadController::class, 'lock'])->middleware('permission:lock-threads');
    Route::delete('force', [ThreadController::class, 'forceDestroy'])->middleware('permission:delete-any-threads');
    Route::get('comments', [CommentController::class, 'index']);
});

// Comment Routes
Route::prefix('comments')->group(function () {
    Route::post('/', [CommentController::class, 'store']);
    Route::put('{comment}', [CommentController::class, 'update']);
    Route::delete('{comment}', [CommentController::class, 'destroy']);
    Route::delete('{comment}/force', [CommentController::class, 'forceDestroy'])->middleware('permission:delete-any-comments');
    Route::post('{comment}/reply', [CommentController::class, 'reply']);
});

// Group Routes
Route::apiResource('groups', GroupController::class)->parameters([
    'groups' => 'group',
]);

Route::prefix('groups/{group}')->group(function () {
    Route::post('join', [GroupController::class, 'join']);
    Route::post('leave', [GroupController::class, 'leave']);
    Route::get('members', [GroupController::class, 'members']);
});

// Like Routes
Route::prefix('likes')->group(function () {
    Route::post('toggle', [LikeController::class, 'toggle']);
    Route::get('/', [LikeController::class, 'index']);
    Route::delete('{like}', [LikeController::class, 'destroy']);
});

// Vote Routes
Route::prefix('votes')->group(function () {
    Route::post('vote', [VoteController::class, 'vote']);
    Route::get('/', [VoteController::class, 'index']);
    Route::delete('{vote}', [VoteController::class, 'destroy']);
    Route::get('user', [VoteController::class, 'userVotes']);
});

// Legacy thread routes for compatibility
Route::get('threads', [ThreadController::class, 'index']);
Route::get('threads/{thread}', [ThreadController::class, 'show']);

// Search routes
Route::prefix('search')->group(function () {
    Route::get('threads', [ThreadController::class, 'index']);
    Route::get('groups', [GroupController::class, 'index']);
});

// Notification Routes
Route::prefix('notifications')->group(function () {
    Route::get('/', [App\Http\Controllers\API\NotificationController::class, 'index']);
    Route::get('/unread-count', [App\Http\Controllers\API\NotificationController::class, 'getUnreadCount']);
    Route::get('/preferences', [App\Http\Controllers\API\NotificationController::class, 'getPreferences']);
    Route::post('/preferences', [App\Http\Controllers\API\NotificationController::class, 'updatePreferences']);
    Route::post('/mark-read/{id?}', [App\Http\Controllers\API\NotificationController::class, 'markAsRead']);
    Route::post('/mark-unread/{id}', [App\Http\Controllers\API\NotificationController::class, 'markAsUnread']);
    Route::delete('/{id?}', [App\Http\Controllers\API\NotificationController::class, 'destroy']);
    Route::post('/bulk-mark-read', [App\Http\Controllers\API\NotificationController::class, 'bulkMarkAsRead']);
    Route::post('/bulk-delete', [App\Http\Controllers\API\NotificationController::class, 'bulkDelete']);
    Route::get('/statistics', [App\Http\Controllers\API\NotificationController::class, 'getStatistics']);
});