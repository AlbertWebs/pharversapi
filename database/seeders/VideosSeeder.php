<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            [
                'active' => true,
                'title' => 'Sample Video 1',
                'company_id' => '0',
                'meta' => 'This is a sample video about pharmaceutical industry insights.',
                'slung' => 'sample-video-1',
                'content' => '<p>This is the content description for the first video.</p>',
                'author' => 'Admin User',
                'category' => 'Videos',
                'file' => null,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => true,
                'title' => 'Sample Video 2',
                'company_id' => '0',
                'meta' => 'This is another sample video.',
                'slung' => 'sample-video-2',
                'content' => '<p>This is the content description for the second video.</p>',
                'author' => 'Admin User',
                'category' => 'Videos',
                'file' => null,
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($videos as $video) {
            DB::table('videos')->updateOrInsert(
                ['slung' => $video['slung']],
                $video
            );
        }
    }
}

