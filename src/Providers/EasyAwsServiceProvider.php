<?php

namespace Mdnayeemsarker\EasyAws\EasyAwsServiceProvider;

use Illuminate\Support\ServiceProvider;
use Mdnayeemsarker\EasyAws\NAws;

class EasyAwsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(NAws::class, function ($app) {
            return new NAws();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrapping code if needed
    }
}
