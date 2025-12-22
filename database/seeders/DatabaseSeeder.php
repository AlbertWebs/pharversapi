<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CreateUsersSeeder::class,
            SiteSettingsSeeder::class,
            CategoriesSeeder::class,
            BlogsSeeder::class,
            AdvertisementsSeeder::class,
            PodcastsSeeder::class,
            VideosSeeder::class,
            ContentsSeeder::class,
            ProductsSeeder::class,
            MessagesSeeder::class,
            NotificationsSeeder::class,
            AreasSeeder::class,
            CompanySeeder::class,
            DownloadSeeder::class,
            LeadSeeder::class,
            LinkSeeder::class,
            NewsletterSeeder::class,
            PrivacySeeder::class,
            SubscriptionSeeder::class,
            TermSeeder::class,
            CopyrightSeeder::class,
        ]);
    }
}
