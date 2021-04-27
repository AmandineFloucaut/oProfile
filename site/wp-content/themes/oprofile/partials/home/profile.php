

        <section class="profile">

            <?php
                $articles = get_articles_from_highlighted_profil();

                $users = get_users();
                foreach($articles as $article){

                    echo '<h2 class="section-title">'. $article->post_title .' : ' . $users[0]->display_name . '</h2>';
                        echo '<div class="profile__content">';
                            echo $article->post_content;
                        echo '</div>';
                }
            ?>

                    <div class="customer-quotes">

                        <h3 class="section-title customer-quotes__title">
                            Quelques retours des clients
                        </h3>

                        <?php
                            get_template_part('partials/components/carousel-posts');
                        ?>

                    </div>

        </section>