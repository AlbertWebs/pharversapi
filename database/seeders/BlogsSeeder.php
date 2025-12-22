<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'active' => true,
                'slung' => 'sample-blog-post-1',
                'company_id' => '0',
                'whitepaper_link' => null,
                'publishable' => 1,
                'video_url' => null,
                'podcast_url' => null,
                'whitepaper_file' => null,
                'type' => 'article',
                'title' => 'Sample Blog Post 1',
                'tags' => 'pharmaceutical, healthcare, africa',
                'video' => null,
                'meta' => 'This is a sample blog post about pharmaceutical industry in Africa.',
                'content' => '<p>This is the content of the first sample blog post. It contains information about the pharmaceutical industry in Africa.</p>',
                'author' => 'Admin User',
                'category' => 'News',
                'image' => null,
                'image_credit' => null,
                'image_one' => null,
                'image_two' => null,
                'image_three' => null,
                'image_four' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => true,
                'slung' => 'sample-blog-post-2',
                'company_id' => '0',
                'whitepaper_link' => null,
                'publishable' => 1,
                'video_url' => null,
                'podcast_url' => null,
                'whitepaper_file' => null,
                'type' => 'interview',
                'title' => 'Sample Blog Post 2',
                'tags' => 'interview, pharmaceutical, innovation',
                'video' => null,
                'meta' => 'This is a sample interview blog post.',
                'content' => '<p>This is the content of the second sample blog post featuring an interview with a pharmaceutical industry expert.</p>',
                'author' => 'Admin User',
                'category' => 'Interviews',
                'image' => null,
                'image_credit' => null,
                'image_one' => null,
                'image_two' => null,
                'image_three' => null,
                'image_four' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($blogs as $blog) {
            DB::table('blogs')->updateOrInsert(
                ['slung' => $blog['slung']],
                $blog
            );
        }
    }
}

