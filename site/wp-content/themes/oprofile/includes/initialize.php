<?php

/**
 * Fonction d'initialisation du thème
 *
 * @return void
 */
function oprofile_initialize()
{

    // Activation de l'image de mise en avant des posts
    add_theme_support('post-thumbnails');

    // Activation de la balise <title> dans le <head>
    add_theme_support('title_tag');

}
add_action('after_setup_theme', 'oprofile_initialize');