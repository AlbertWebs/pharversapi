<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'title' => 'About Us',
                'slung' => 'about-us',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contact Us',
                'slung' => 'contact-us',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Privacy Policy',
                'slung' => 'privacy-policy',
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($contents as $content) {
            DB::table('contents')->updateOrInsert(
                ['slung' => $content['slung']],
                $content
            );
        }
    }
}

