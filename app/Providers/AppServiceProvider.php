<?php

namespace App\Providers;

use App\Repositories\Users\UserEloquent;
use App\Repositories\Users\UserInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * @param 1. interface 2. implementation
         *
         */
        $this->app->singleton(UserInterface::class, UserEloquent::class);
    }
}
