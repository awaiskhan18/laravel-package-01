<?php

namespace Awaisahmadkhan200\ApiResp;

use Illuminate\Support\ServiceProvider;

class ApiReponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Awaisahmadkhan200\ApiResp\Controllers\ApiReponseController');
    }


}
