<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;


class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        // SitemapGenerator::create(config('app.url'))
        //     ->hasCrawled(function (Url $url) {

        //         if (!$url->segment(1)) {
        //             return;
        //         }

        //         // if ($url->segment(1) === '') {
        //         //     return;
        //         // }

        //         return  $url->setLastModificationDate(Carbon::yesterday());
        //     })
        //     ->writeToFile(public_path('sitemap3.xml'));
    }
}
