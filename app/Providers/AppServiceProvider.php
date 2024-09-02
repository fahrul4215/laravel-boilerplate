<?php

namespace App\Providers;

use Dotenv\Dotenv;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Check if we are in the production environment
        if (app()->environment('production')) {
            // Load the .env.prod file
            $dotenv = Dotenv::createImmutable(base_path(), '.env.prod');
            $dotenv->load();
        }
    }
}
