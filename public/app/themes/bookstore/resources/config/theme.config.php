<?php

return [

    /**
     * Edit this file in order to configure your theme
     * settings or preferences.
     *
     */

    /* --------------------------------------------------------------- */
    // Theme textdomain
    /* --------------------------------------------------------------- */
    'textdomain' => 'bookstore-theme',

    /* --------------------------------------------------------------- */
    // Global Javascript namespace of your theme
    /* --------------------------------------------------------------- */
    'namespace' => 'bookstore',

    /* --------------------------------------------------------------- */
    // Set WordPress admin ajax file without the PHP extension
    /* --------------------------------------------------------------- */
    'ajaxurl' => 'admin-ajax',

    /* --------------------------------------------------------------- */
    // Cleanup Header
    /* --------------------------------------------------------------- */
    'cleanup' => true,

    /* --------------------------------------------------------------- */
    // Restrict access to the WordPress Admin for users with a
    // specific role.
    // Once the theme is activated, you can only log in by going
    // to 'wp-login.php' or 'login' (if permalinks changed) urls.
    // By default, allows 'administrator', 'editor', 'author',
    // 'contributor' and 'subscriber' to access the ADMIN area.
    // Edit this configuration in order to limit access.
    /* --------------------------------------------------------------- */
    'access' => [
        'administrator',
        'editor',
        'author',
        'contributor',
        'subscriber',
    ],

    /* --------------------------------------------------------------- */
    // Theme class aliases
    /* --------------------------------------------------------------- */
    'aliases' => [
        'Action' => LaraPress\Facades\Action::class,
        'Ajax' => LaraPress\Facades\Ajax::class,
        'Asset' => LaraPress\Facades\Asset::class,
        'Blade' => LaraPress\Facades\Blade::class,
        'Config' => LaraPress\Facades\Config::class,
        'DB' => LaraPress\Facades\DB::class,
        'Field' => LaraPress\Facades\Field::class,
        'Filter' => LaraPress\Facades\Filter::class,
        'Form' => LaraPress\Facades\Form::class,
        'Html' => LaraPress\Facades\Html::class,
        'Input' => LaraPress\Facades\Input::class,
        'Loop' => LaraPress\Facades\Loop::class,
        'Meta' => LaraPress\Metabox\Meta::class,
        'Metabox' => LaraPress\Facades\Metabox::class,
        'Option' => LaraPress\Page\Option::class,
        'Page' => LaraPress\Facades\Page::class,
        'PostType' => LaraPress\Facades\PostType::class,
        'Route' => LaraPress\Facades\Route::class,
        'Section' => LaraPress\Facades\Section::class,
        'TaxField' => LaraPress\Taxonomy\TaxField::class,
        'TaxMeta' => LaraPress\Taxonomy\TaxMeta::class,
        'Taxonomy' => LaraPress\Facades\Taxonomy::class,
        'User' => LaraPress\Facades\User::class,
        'Validator' => LaraPress\Facades\Validator::class,
        'View' => LaraPress\Facades\View::class,
        /*
         * Our Books custom facade defined inside the plugin.
         */
        'Books' => Dev\Bookstore\Books\Facades\Books::class
    ]

];