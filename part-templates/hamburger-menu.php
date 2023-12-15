<!-- part-hamburger-mnu-section -->
<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>
    <?php
        if(has_nav_menu('header-menu')) :
            wp_nav_menu([
                'theme_location' => 'header-menu',
                'menu' => 'Header Menu',
                'container' => '',
                'container_class' => '',
                'menu_class' => 'menu__box',
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
            ]);
        endif;    
    ?>
</div>