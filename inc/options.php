<?php 

/* ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(
        array(
            'page_title'  => 'Theme Options',
            'menu_title'  => 'Theme Options',
            'menu_slug'   => 'theme-settings',
            'capability'  => 'edit_posts',
            'redirect'    => true,
            'position' => 81,
            'icon_url'    => 'dashicons-store'
        )
    );
}