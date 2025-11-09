<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forum;
use App\Models\Thread;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Str;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create forums
        $forums = [
            [
                'name' => 'General Discussion',
                'slug' => 'general-discussion',
                'description' => 'General discussions about various topics',
                'category' => 'general',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Announcements',
                'slug' => 'announcements',
                'description' => 'Official announcements and updates',
                'category' => 'announcements',
                'is_active' => true,
                'sort_order' => 0,
            ],
            [
                'name' => 'Technical Support',
                'slug' => 'technical-support',
                'description' => 'Get help with technical issues',
                'category' => 'support',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Feature Requests',
                'slug' => 'feature-requests',
                'description' => 'Suggest new features and improvements',
                'category' => 'feedback',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Off-Topic',
                'slug' => 'off-topic',
                'description' => 'Casual conversations and off-topic discussions',
                'category' => 'general',
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($forums as $forumData) {
            Forum::create($forumData);
        }

        // Get some users for creating sample content
        $users = User::take(5)->get();
        if ($users->isEmpty()) {
            // Create a sample user if none exists
            $user = User::create([
                'name' => 'Sample User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                'join_date' => now(),
                'role_name' => 'User',
                'status' => 'Active',
            ]);
            $user->assignRole('user');
            $users = collect([$user]);
        }

        // Create sample threads
        $generalForum = Forum::where('slug', 'general-discussion')->first();
        $supportForum = Forum::where('slug', 'technical-support')->first();

        if ($generalForum && $users->isNotEmpty()) {
            $threads = [
                [
                    'title' => 'Welcome to our community!',
                    'content' => 'This is a sample welcome thread. Feel free to introduce yourself here.',
                    'user_id' => $users->first()->id,
                    'is_pinned' => true,
                ],
                [
                    'title' => 'Community Guidelines',
                    'content' => 'Please be respectful to others. No spam, no hate speech, and keep discussions civil.',
                    'user_id' => $users->first()->id,
                    'is_pinned' => true,
                ],
                [
                    'title' => 'Random Discussion Thread',
                    'content' => 'This is a place for casual conversations. What\'s on your mind today?',
                    'user_id' => $users->random()->id,
                ],
            ];

            foreach ($threads as $threadData) {
                $thread = $generalForum->threads()->create($threadData);
                $thread->updateLastReply();

                // Add some comments to threads
                if ($threadData['title'] !== 'Welcome to our community!') {
                    for ($i = 0; $i < rand(1, 3); $i++) {
                        $comment = $thread->comments()->create([
                            'content' => 'This is a sample comment on the thread.',
                            'user_id' => $users->random()->id,
                        ]);
                        $thread->updateLastReply($comment);
                    }
                }
            }
        }

        if ($supportForum && $users->count() > 1) {
            $thread = $supportForum->threads()->create([
                'title' => 'How to get started with the forum?',
                'content' => 'I\'m new here and wondering how to get started. Any tips?',
                'user_id' => $users->slice(1)->first()->id,
            ]);
            $thread->updateLastReply();

            // Add a helpful reply
            $comment = $thread->comments()->create([
                'content' => 'Welcome! Start by introducing yourself in the general discussion forum. Feel free to ask questions and join existing conversations.',
                'user_id' => $users->first()->id,
            ]);
            $thread->updateLastReply($comment);
        }
    }
}