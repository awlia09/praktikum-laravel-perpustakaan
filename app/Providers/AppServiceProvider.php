<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; // Import Facade Gate

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
        // Mendefinisikan Gate manage-users (Hanya role admin yang bernilai true)
        Gate::define('manage-users', function ($user) {
            return $user->role === 'admin';
        });
    }
}