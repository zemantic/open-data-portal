<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

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
        //
        // Enables laravel strict mode for the developmet environment
        // https://planetscale.com/blog/laravels-safety-mechanisms
        Model::shouldBeStrict(!$this->app->isProduction());
    }
}
