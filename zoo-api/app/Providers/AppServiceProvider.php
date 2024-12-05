<?php

namespace App\Providers;

use App\Models\Animals;
use Laravel\Passport\Passport;
use App\Observers\AnimalObserver;
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
        Passport::enablePasswordGrant();
        Animals::observe(AnimalObserver::class);
    }
}
