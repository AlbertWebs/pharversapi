



        <?php
            $sitemapPath = public_path('sitemap.xml');
            $Blog = \App\Models\Blog::all();
        ?>
        @foreach($Blog as $blog)
          <?php \Spatie\Sitemap\Sitemap::create()->add(\Spatie\Sitemap\Tags\Url::create('/topics/'.$blog->type.'/'.$blog->slung.'')->setLastModificationDate(\Carbon\Carbon::yesterday()))->writeToFile($sitemapPath); ?>
        @endforeach
