<?php

namespace Dev\Bookstore\Books\Services;

use LaraPress\Facades\Asset;
use LaraPress\Foundation\ServiceProvider;

class AssetsProvider extends ServiceProvider
{
    /**
     * Register plugin CSS asset.
     *
     */
    public function register()
    {
        Asset::add('books-manager-css', 'css/books-manager.min.css', false, '1.0.0', 'all')->to('admin');
    }
}