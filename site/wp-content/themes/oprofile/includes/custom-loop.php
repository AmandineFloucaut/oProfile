<?php

/**
 * Fonction permettant de cibler les articles d'une catégorie en particulier
 *
 * @param integer $category
 * @param integer $number = -1 permet d'afficher tous les articles
 * @return void
 */
function get_articles_from_category($category = 1, $number = -1) {

    $queryFilters = [
        'cat' => $category,
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'post_per_page' => $number
    ];

    $query = new WP_Query($queryFilters);

    return $query->posts;

}

function get_articles_from_company(){

    return get_articles_from_category(4, -1);
}

// function get_articles_from_profil_of_week(){

//     return get_articles_from_category(10, 1);
// }

function get_articles_from_highlighted_profil(){

    return get_articles_from_category(11, 3);
}

// TODO custom boucle pour articles affichés sur la home
function get_articles_from_home(){

    return get_articles_from_category(3, 10);
}
