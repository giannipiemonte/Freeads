<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// code ajouté pour debuguer probleme table BDD
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //code ajouté pour debuguer probleme table BDD
        Schema::defaultStringLength(191);
    }
}
