<?php

namespace App\Providers;

use App\Services\InmobiliariaManager;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191); //NEW: Increase StringLength
    }
}
