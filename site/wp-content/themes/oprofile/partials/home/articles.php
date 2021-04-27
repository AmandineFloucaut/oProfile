        <section class="article">
            <h2 class="section-title">Les articles de la communauté</h2>
            <div class="excerpt-list">

                    <?php
                        if(have_posts()) {

                            while(have_posts()){
                                the_post();

                                echo '<article class="excerpt" style="background-image: url(\'https://source.unsplash.com/1kEHpwZdmtc\')">';
                                // echo '<a href="'. get_the_permalink() .'">';
                                    echo '<h3 class="excerpt__title">';
                                        echo '<a href="'. get_the_permalink() . '">' . the_title() . '</a>';
                                            //echo  the_title();
                                        //echo '</a>';
                                    echo '</h3>';
                                // echo '';
                                echo '<p class="excerpt__text">'. the_excerpt() .'</p>';
                                echo '</article>';
                            }
                        }
                    ?>
            </div>
        </section>