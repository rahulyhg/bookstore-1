<?php

namespace Dev\Bookstore\Books\Services;

use LaraPress\Facades\Route;
use LaraPress\Foundation\ServiceProvider;

class RoutingService extends ServiceProvider
{
    /**
     * Register plugin routes.
     * Define a custom namespace.
     */
    public function register()
    {
        Route::group([
            'namespace' => 'Dev\Bookstore\Books\Controllers'
        ], function () {
            require larapress_path('plugin.dev.bookstore.books.resources').'routes.php';
        });
    }
}