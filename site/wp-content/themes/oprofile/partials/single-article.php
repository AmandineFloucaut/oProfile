<article class="article">

    <section>

        <?php
            the_post();

            $imageThumbnail = get_the_post_thumbnail_url();

            if($imageThumbnail) {
                echo '<img src="' . $imageThumbnail . '" class="article__thumbnail"/>';
            }
        ?>

    </section>

    <h1> <?php the_title();?> </h1>

    <section class="article__info">

            <div>Par <?= get_the_author();?></div>
            <date>Le <?= get_the_date();?></date>

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