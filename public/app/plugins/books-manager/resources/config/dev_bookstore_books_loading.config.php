<?php

/**
 * Plugin autoloading configuration.
 */
return [
    'Dev\\Bookstore\\Books\\Services\\' => larapress_path('plugin.dev.bookstore.books.resources').'providers',
    'Dev\\Bookstore\\Books\\Models\\' => larapress_path('plugin.dev.bookstore.books.resources').'models',
    'Dev\\Bookstore\\Books\\Controllers\\' => larapress_path('plugin.dev.bookstore.books.resources').'controllers',
    'Dev\\Bookstore\\Books\\Facades\\' => larapress_path('plugin.dev.bookstore.books.resources').'facades'
];