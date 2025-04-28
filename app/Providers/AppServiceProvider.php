<?php

namespace App\Providers;
use App\Models\NavbarItem;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        View::composer('partials.header', function ($view) {
            $navbarItems = NavbarItem::with('subItems')->orderBy('position')->get();
            $view->with('navbarItems', $navbarItems);
        });
    }
}
