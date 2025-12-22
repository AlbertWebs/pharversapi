<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'News',
                'name' => 'News',
                'thicknesses' => null,
                'a_c_ratings' => null,
                'meta' => 'Latest pharmaceutical news and updates',
                'slung' => 'news',
                'content' => '<p>Stay updated with the latest news in the pharmaceutical industry.</p>',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Interviews',
                'name' => 'Interviews',
                'thicknesses' => null,
                'a_c_ratings' => null,
                'meta' => 'Exclusive interviews with pharmaceutical industry leaders',
                'slung' => 'interviews',
                'content' => '<p>Read exclusive interviews with industry experts and leaders.</p>',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Podcasts',
                'name' => 'Podcasts',
                'thicknesses' => null,
                'a_c_ratings' => null,
                'meta' => 'Listen to pharmaceutical industry podcasts',
                'slung' => 'podcasts',
                'content' => '<p>Listen to our collection of pharmaceutical industry podcasts.</p>',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Videos',
                'name' => 'Videos',
                'thicknesses' => null,
                'a_c_ratings' => null,
                'meta' => 'Watch pharmaceutical industry videos',
                'slung' => 'videos',
                'content' => '<p>Watch informative videos about the pharmaceutical industry.</p>',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->updateOrInsert(
                ['slung' => $category['slung']],
                $category
            );
        }
    }
}

