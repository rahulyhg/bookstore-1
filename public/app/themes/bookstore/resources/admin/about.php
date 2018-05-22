<?php

/**
 * Customize the about page.
 * The page has the "about" template associated to it
 * so we can show custom fields for that page only.
 */
Metabox::make(__("Team", THEME_TEXTDOMAIN), 'page', ['template' => 'about'])->set([
    Field::infinite('collaborators', [
        Field::text('full_name', ['title' => __("Full Name", THEME_TEXTDOMAIN), 'info' => __("Please enter your first name than your last name. We are a friendly team.", THEME_TEXTDOMAIN)]),
        Field::text('job', ['title' => __("Job Status", THEME_TEXTDOMAIN)]),
        Field::media('pic', ['title' => __("Profile Image", THEME_TEXTDOMAIN)])
    ], ['title' => __("Members", THEME_TEXTDOMAIN)])
]);