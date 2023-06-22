<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\carbon;

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
        //
        Carbon::setLocale('fr');
    }
}
