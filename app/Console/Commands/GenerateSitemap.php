<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog;
use App\Models\Content;
use App\Models\Category;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:generate-sitemap';
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $postsitmap = Sitemap::create();

        Content::get()->each(function (Content $post) use ($postsitmap) {
            $postsitmap->add(
                Url::create("/contents/{$post->slung}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        });

        Category::get()->each(function (Category $post) use ($postsitmap) {
            $postsitmap->add(
                Url::create("/topic/{$post->slung}")
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        });

        Blog::get()->each(function (Blog $post) use ($postsitmap) {
            $postsitmap->add(
                Url::create("/topics/{$post->type}/{$post->slung}")
                    ->setPriority(0.7)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        });


        $postsitmap->writeToFile(public_path('sitemap.xml'));
    }
}
