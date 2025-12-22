<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PodcastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $podcasts = [
            [
                'active' => true,
                'title' => 'Sample Podcast Episode 1',
                'company_id' => '0',
                'meta' => 'This is a sample podcast episode about pharmaceutical industry trends.',
                'slung' => 'sample-podcast-episode-1',
                'content' => '<p>This is the content description for the first podcast episode.</p>',
                'author' => 'Admin User',
                'category' => 'Podcasts',
                'file' => null,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => true,
                'title' => 'Sample Podcast Episode 2',
                'company_id' => '0',
                'meta' => 'This is another sample podcast episode.',
                'slung' => 'sample-podcast-episode-2',
                'content' => '<p>This is the content description for the second podcast episode.</p>',
                'author' => 'Admin User',
                'category' => 'Podcasts',
                'file' => null,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($podcasts as $podcast) {
            DB::table('podcasts')->updateOrInsert(
                ['slung' => $podcast['slung']],
                $podcast
            );
        }
    }
}

