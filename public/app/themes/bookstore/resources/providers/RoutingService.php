<?php

namespace Theme\Providers;

use LaraPress\Facades\Route;
use LaraPress\Foundation\ServiceProvider;

class RoutingService extends ServiceProvider
{
    /**
     * Define theme routes namespace.
     */
    public function register()
    {
        Route::group([
            'namespace' => 'Theme\Controllers'
        ], function () {
            require larapress_path('theme.resources').'routes.php';
        });
    }
}