<?php

namespace App\Providers;

use App\Models\Products;
// use App\User;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;
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
        //
        Paginator::defaultView('pagination::default');
        Gate::define('destroy-product', function (User $user, Product $Product){
            return $user->is_admin;
        });
    }
}
