<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('App\Models\Blog\BlogRepositoryInterface','App\Models\Blog\BlogRepository');
        $this->app->bind('App\Models\Post\PostRepositoryInterface','App\Models\Post\PostRepository');

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}