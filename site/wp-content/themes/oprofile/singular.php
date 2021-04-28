<?php
    setlocale(LC_TIME, 'fr');

    get_header();
?>

    <header class="header-singular">
        <?php
            get_template_part('partials/components/nav');
            get_template_part('partials/components/topbar');


        ?>
    </header>


    <?php
        get_template_part('partials/components/banner');
        //get_template_part('partials/footer-display');
        get_template_part('partials/single-article');
    ?>

<?php
    get_footer();
?>