<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Comments;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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

        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        } else {
            URL::forceScheme('http');
        }


        Paginator::defaultView('vendor.pagination.flowbite');
        Gate::define('admin', function (User $user) {
            return $user->is_admin == true;
        });

        Gate::define('is_authorComment', function (User $user, Comments $comments) {
            return $user->id == $comments->user_id;
        });

        Gate::define('is_loggedIn', function () {
            return auth()->check();
        });
    }
}
