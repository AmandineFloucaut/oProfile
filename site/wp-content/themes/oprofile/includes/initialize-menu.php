<?php

function register_menus()
{
    register_nav_menus([
        'menu-main' => 'Navigation principale',
        'menu-footer' => 'Navigation secondaire'
    ]);
}

add_action('after_setup_theme', 'register_menus');