<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_site_settings')->updateOrInsert(
            ['id' => 1],
            [
                'sitename' => 'African Pharmaceutical Review',
            'logo' => 'aprlogo.png',
            'logo_footer' => 'aprlogo.png',
            'logo_two' => 'aprlogo.png',
            'favicon' => null,
            'email' => 'info@africanpharmaceuticalreview.com',
            'email_one' => null,
            'mobile_one' => null,
            'mobile_two' => null,
            'mpesa' => null,
            'paypal' => 'bervin@africanpharmaceuticalreview.com',
            'tagline' => null,
            'url' => 'https://www.africanpharmaceuticalreview.com',
            'location' => 'Raphta Road',
            'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
            'address' => null,
            'facebook' => null,
            'whatsapp' => null,
            'telegram' => null,
            'twitter' => null,
            'linkedin' => null,
            'instagram' => null,
            'youtube' => null,
            'google' => null,
            'risks' => null,
            'welcome' => null,
            'tawkTo' => null,
            'tawkToStatus' => 1,
            'whatsAppStatus' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

