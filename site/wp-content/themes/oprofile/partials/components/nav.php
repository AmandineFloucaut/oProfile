        <nav class="main-menu">
            <div class="close-button"><i class="fas fa-times"></i></div>
            <ul>
            <?php
                $menuEmplacements = get_nav_menu_locations();
                $menuId = $menuEmplacements['menu-main'];
                $menuItems = wp_get_nav_menu_items($menuId);

                foreach($menuItems as $item){
                    echo '<li class="main-menu__item">';
                        echo '<a href="' . $item->url . '">';
                            echo $item->title;
                        echo '</a>';
                    echo '</li>';
                }
            ?>
            </ul>
        </nav>