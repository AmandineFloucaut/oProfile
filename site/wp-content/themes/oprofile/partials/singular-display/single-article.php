<article class="single-article">

    <section class="single-article__image">

        <h2 class="section-title"> <?php the_title();?> </h2>

        <?php
            the_post();

            $imageThumbnail = get_the_post_thumbnail_url();

            if($imageThumbnail) {
                echo '<div class="single-article__image">';
                    echo '<img src="' . $imageThumbnail . '" class="single-article__thumbnail"/>';
                echo '</div>';
            }
        ?>

    </section>

    <section class="single-article__section">
        <p class="single-article__info">
        Par <a href="" class="author"><?= get_the_author();?></a>,
        le <a href=""> <time class="date"><?= get_the_date('l F j, Y');?></time></a>
        </p>

        <p class="single-article__categories">Catégorie :
            <?php
                $categories = get_the_category();
                foreach($categories as $category) {
                    $categoryURL = get_category_link($category->term_id);

                    echo '<a class="article__category" href="' . $categoryURL. '">';
                        echo $category->name;
                    echo '</a>';
                }
            ?>
        </p>

        <div class="single-article__content">
            <?php
                the_content();
            ?>
        </div>
    </section>

</article>