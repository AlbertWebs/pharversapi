<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advertisements = [
            [
                'active' => false,
                'title' => 'Leadboard',
                'date' => '2024-06-07',
                'url' => 'https://example.com/leadboard',
                'dimension' => '728X90',
                'page' => 'home',
                'placement' => 'top',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => 'Super Leadboard',
                'date' => '2024-06-08',
                'url' => 'https://example.com/super-leadboard',
                'dimension' => '970 X 90',
                'page' => 'home',
                'placement' => 'top',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => 'Wallpaper-right',
                'date' => '2024-06-20',
                'url' => 'https://example.com/wallpaper-right',
                'dimension' => '210X900',
                'page' => 'all',
                'placement' => 'all',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => 'Medium Rectangle',
                'date' => '2024-06-09',
                'url' => 'https://example.com/medium-rectangle',
                'dimension' => '300X100',
                'page' => 'all',
                'placement' => 'all',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => 'Wallpaper-left',
                'date' => '2024-06-21',
                'url' => 'https://example.com/wallpaper-left',
                'dimension' => '210X900',
                'page' => 'all',
                'placement' => 'all',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => 'Fixed Footer',
                'date' => '2024-06-22',
                'url' => 'https://example.com/fixed-footer',
                'dimension' => '728X90',
                'page' => 'all',
                'placement' => 'footer',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => '3.0-square-side',
                'date' => '2024-03-25',
                'url' => 'https://example.com/square-30',
                'dimension' => '300X100',
                'page' => 'all',
                'placement' => 'all',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => '3.1-square-side',
                'date' => '2024-03-26',
                'url' => 'https://example.com/square-31',
                'dimension' => '300X100',
                'page' => 'all',
                'placement' => 'all',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => false,
                'title' => 'Interviews',
                'date' => '2024-06-10',
                'url' => 'https://example.com/interviews',
                'dimension' => '970 X 90',
                'page' => 'home',
                'placement' => 'top',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'active' => true,
                'title' => 'ad-newsletter',
                'date' => '2024-06-11',
                'url' => 'https://example.com/newsletter',
                'dimension' => '300X100',
                'page' => 'all',
                'placement' => 'all',
                'author' => '1',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($advertisements as $ad) {
            DB::table('advertisements')->updateOrInsert(
                ['title' => $ad['title']],
                $ad
            );
        }
    }
}

