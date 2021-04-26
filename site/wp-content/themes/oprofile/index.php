<?php
    get_header();
?>

    <header class="header header--home">

        <?php
            get_template_part('partials/components/nav');
            get_template_part('partials/components/topbar');
            get_template_part('partials/home/header-display');
        ?>

    </header>

    <?php
        get_template_part('partials/components/banner');
    ?>

    <main>

        <?php
            get_template_part('partials/home/articles');
            get_template_part('partials/components/banner');
            get_template_part('partials/home/profile');
            get_template_part('partials/components/banner');
            get_template_part('partials/home/compagnies');
        ?>

    </main>

        <?php
            get_template_part('partials/components/footer-display');
        ?>

<?php
    get_footer();
?>