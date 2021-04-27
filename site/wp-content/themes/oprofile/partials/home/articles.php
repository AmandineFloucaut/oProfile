        <section class="article">
            <h2 class="section-title">Les articles de la communauté</h2>
            <div class="excerpt-list">

                    <?php

                        $wordpressArticles = get_articles_from_home();
                        // echo '<div style="border: solid 2px #F00">';
                        //     echo '<div style="; background-color:#CCC">@'.__FILE__.' : '.__LINE__.'</div>';
                        //     echo '<pre style="background-color: rgba(255,255,255, 0.8);">';
                        //     print_r($wordpressArticles);
                        //     echo '</pre>';
                        // echo '</div>';
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