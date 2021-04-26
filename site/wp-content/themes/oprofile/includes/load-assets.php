<?php

function oprofile_load_assets()
{
    wp_enqueue_style(
        'main-css',
        get_theme_file_uri('assets/dist/main.css')
    );

    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('assets/dist/main.js')
    );
}

add_action('wp_enqueue_scripts', 'oprofile_load_assets');