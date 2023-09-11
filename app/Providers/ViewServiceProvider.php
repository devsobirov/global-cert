<?php

namespace App\Providers;

use App\View\Composers\MenuComposer;
use App\View\Composers\SettingsComposer;
use App\View\Composers\SidebarComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['layouts.web'], SettingsComposer::class);
        View::composer(['layouts.web'], MenuComposer::class);
        View::composer('partials.sidebar', SidebarComposer::class);
    }
}
