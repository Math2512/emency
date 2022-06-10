<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Realisation;
use App\Observers\ArticleObserver;
use App\Observers\RealisationObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Article::observe(ArticleObserver::class);
        Realisation::observe(RealisationObserver::class);
        Schema::defaultStringLength(191);
    }
}
