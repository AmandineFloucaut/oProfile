    <footer class="footer" >

        <div class="footer__block">
            <div class="footer__contact">

                <div class="contact__block">

                    <div class="contact__title">
                        <i class="fas fa-at"></i>
                        <p> Email </p>
                    </div>

                    <div class="contact__content">
                        <i ></i>
                        <p> afloucaut@gmail.com </p>
                    </div>
                </div>

                <div class="contact__block">

                    <div class="contact__title">
                        <i class="fas fa-phone"></i> 
                        <p> Téléphone </p>
                    </div>

                    <div class="contact__content">
                        <i ></i>
                        <p> +33 6 43 02 01 98 </p>
                    </div>

                </div>

                <div class="contact__block">

                    <div class="contact__title">
                        <i class="fas fa-home"></i>
                        <p> Adresse </p>
                    </div>

                    <div class="contact__content">
                        <i ></i>
                        <p>
                        5 rue du calvaire
                        56220 CADEN
                        </p>
                    </div>
                </div>

            </div> <!-- End footer contact -->


        <div class="footer__links">

            <?php
                $menuEmplacements = get_nav_menu_locations();
                $menuId = $menuEmplacements['menu-footer'];
                $menuItems = wp_get_nav_menu_items($menuId);
            ?>

            <div class="footer__links--block">
            <a href="<?= $menuItems[0]->url; ?>"> <?= $menuItems[0]->title; ?> </a>
            <a href="<?= $menuItems[1]->url; ?>"> <?= $menuItems[1]->title; ?> </a>
            </div>

            <div class="footer__links--block">
                <a href="<?= $menuItems[2]->url; ?>"> <?= $menuItems[2]->title; ?> </a>
                <a href="<?= $menuItems[3]->url; ?>"> <?= $menuItems[3]->title; ?> </a>
                <a href="<?= $menuItems[4]->url; ?>"> <?= $menuItems[4]->title; ?> </a>
                <a href="<?= $menuItems[5]->url; ?>"> <?= $menuItems[5]->title; ?> </a>
            </div>

        </div>
</div> <!-- Footer block -->
        <div class="networks">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-github"></i>
        </div>

    </footer>