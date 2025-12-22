<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
            [
                'title' => 'Welcome Notification',
                'type' => 'info',
                'status' => 1,
                'content' => 'Welcome to African Pharmaceutical Review!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'System Update',
                'type' => 'info',
                'status' => 1,
                'content' => 'The system has been updated with new features.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($notifications as $notification) {
            DB::table('notifications')->updateOrInsert(
                ['title' => $notification['title']],
                $notification
            );
        }
    }
}

