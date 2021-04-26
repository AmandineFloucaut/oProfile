
        <section class="company">

            <h2 class="section-title"> Ils nous font confiance </h2>

                <?php
                    $companyArticles = get_articles_from_company();
                    // BUG
                    echo $companyArticles;
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