<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CopyrightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $copyright = [
            'content' => '<div>
                <p>© ' . date('Y') . ' Pharverse Limited. All rights reserved.</p>
                
                <p>The content on this website, including but not limited to text, graphics, logos, icons, images, audio clips, digital downloads, data compilations, and software, is the property of Pharverse Limited and is protected by international copyright laws.</p>
                
                <p>Unauthorized use, reproduction, or distribution of any content from this site is strictly prohibited without prior written permission from Pharverse Limited.</p>
                
                <p>All trademarks, service marks, and trade names are proprietary to Pharverse Limited or other respective owners that have granted Pharverse Limited the right and license to use such marks.</p>
                
                <p>For permissions or inquiries regarding the use of our content, please contact us at: admin@africanpharmaceuticalreview.com</p>
                
                <p>This copyright notice applies to all content published on this website, including articles, blog posts, images, videos, podcasts, and any other materials unless otherwise stated.</p>
            </div>',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // Check if copyright record exists, if not create it
        $existing = DB::table('copyright')->first();
        if (!$existing) {
            DB::table('copyright')->insert($copyright);
        } else {
            // Update existing record if it exists but has no content
            if (empty($existing->content)) {
                DB::table('copyright')->where('id', $existing->id)->update($copyright);
            }
        }
    }
}
