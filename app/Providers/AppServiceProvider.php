<?php

namespace App\Providers;

use App\Services\InmobiliariaManager;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'crm.layouts.components.left_sidebar',
            'App\Http\View\Composers\ModulesComposer'
        );
    }
}
