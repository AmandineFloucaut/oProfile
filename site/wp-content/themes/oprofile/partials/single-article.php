<article class="article">

    <section>

        <h2 class="section-title"> <?php the_title();?> </h2>

        <?php
            the_post();

            $imageThumbnail = get_the_post_thumbnail_url();

            if($imageThumbnail) {
                echo '<div class="article__image">';
                    echo '<img src="' . $imageThumbnail . '" class="article__thumbnail"/>';
                echo '</div>';
            }
        ?>

    </section>

    <section class="article__info">
        <p>
        Par <a href="" class="author"><?= get_the_author();?></a>,
        le <a href=""> <time class="date"><?= get_the_date('l F j, Y');?></time></a>
        </p>
    </section>

    <section class="article__categogies">

        <p>Posté dans</p>

        <?php
            $categories = get_the_category();
            foreach($categories as $category) {
                $categoryURL = get_category_link($category->term_id);

                echo '<a class="article__category" href="' . $categoryURL. '">';
                    echo $category->name;
                echo '</a>';
            }
        ?>

    </section>

    <section>

        <?php
            the_content();
        ?>

    </section>

</article>