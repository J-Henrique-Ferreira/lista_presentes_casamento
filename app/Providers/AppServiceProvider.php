<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    protected $policies = [];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->hasPermission('admin');
        });

        Gate::define('default', function (User $user) {
            return $user->hasPermission('default') || $user->hasPermission('admin');
        });
    }
}
