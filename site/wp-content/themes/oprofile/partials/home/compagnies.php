
        <section class="company">

            <h2 class="section-title"> Ils nous font confiance </h2>

            <!-- <div class="company__post" >
                <div class="post__image">
                    <img src="<?= get_theme_file_uri('assets/images/github.png') ?>" alt="">
                </div> -->

                <?php
                    $companyArticles = get_articles_from_company();
                    $imageGit = get_theme_file_uri('assets/images/github.png');
                    foreach($companyArticles as $article){

                        echo '<div class="company__post" >';
                            echo '<div class="post__image">';
                                echo '<img src="' . $imageGit . '" alt="">';
                            echo '</div>';
                            echo '<div class="post__content">';
                                echo '<h4>'. $article->post_title .'</h4>';
                                echo '<p>' . $article->post_excerpt . '</p>';
                            echo '</div>';
                        echo '</div>';

                    }
                ?>

        </section>