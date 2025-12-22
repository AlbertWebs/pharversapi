<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'subject' => 'Sample Inquiry',
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'content' => 'This is a sample inquiry message.',
                'mobile' => '+1234567890',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject' => 'General Question',
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'content' => 'I have a general question about your services.',
                'mobile' => '+0987654321',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Messages don't have unique constraints, so we can insert multiple
        // Only insert if they don't already exist (check by email and subject)
        foreach ($messages as $message) {
            $exists = DB::table('messages')
                ->where('email', $message['email'])
                ->where('subject', $message['subject'])
                ->exists();
            
            if (!$exists) {
                DB::table('messages')->insert($message);
            }
        }
    }
}

