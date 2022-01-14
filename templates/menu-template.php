    <div class="header-nav">

        <div id="headernavitems" class="header-navitems">
            <?php
            $separatorTags = ' ';
            wp_nav_menu( array( 
                'menu' => is_user_logged_in() ? 'inloggad' : 'huvudmeny', 
                'theme_location' => 'huvudmeny', 
                'container_id' => 'submenu',
                'container_class' => 'headerMenu',
                'walker' => new Sub_Menu_Walker(),
                'before' => "",
                'after' => "", )
            ); 
            ?>
        </div>
    </div>

                <!-- Meny som slide:ar ut  -->

            <div id="sidebarMenu">
                <?php
                    $separatorTags = ' ';
                    wp_nav_menu( array( 
                        'menu' => is_user_logged_in() ? 'inloggad' : 'huvudmeny', 
                        'theme_location' => 'huvudmeny', 
                        'container_class' => 'sidebarMenuInner',
                        'walker' => new Sub_Menu_Walker(),
                        'before' => "",
                        'after' => "", )
                    ); 
                ?>
                        
            </div>   

