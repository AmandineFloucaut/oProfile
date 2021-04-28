        <section class="article">
            <h2 class="section-title">Les articles de la communauté</h2>
            <div class="excerpt-list">

                    <?php

                        $wordpressArticles = get_articles_from_home();

                            foreach($wordpressArticles as $article){

                                echo '<article class="excerpt" style="background-image: url(\'https://source.unsplash.com/1kEHpwZdmtc\')">';

                                    echo '<h3 class="excerpt__title">';
                                        echo '<a href="'. $article->guid . '">';
                                            echo  $article->post_title;
                                        echo '</a>';
                                    echo '</h3>';

                                echo '<p class="excerpt__text">'. $article->post_excerpt .'</p>';
                                echo '</article>';
                            }
                    ?>
            </div>
        </section>