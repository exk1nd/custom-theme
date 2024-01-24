<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>

</head>


<body <?php if ( $hub_page ): body_class('hub-page-class'); else: body_class(); endif; ?>>

<?php wp_body_open(); ?>
<header class="header" id="header">
	<div class="container">
		<div class="row main_header">
			<div class="col-10 col-lg-3 col-xl-2 d-flex">
				<a href="<?= get_home_url(); ?>" class="header_logo">
				</a>
            </div>
            <div
                    class="<?php if ( is_front_page() ): echo 'col-lg-9 col-xl-10'; else: echo 'col-lg-6 col-xl-8'; endif; ?> d-lg-block d-none">
                <?php
                if ( has_nav_menu( 'header-menu' ) ) :
                    wp_nav_menu( [
                        'theme_location'  => 'header-menu',
                        'menu'            => 'Header Menu',
                        'container'       => 'nav',
                        'container_class' => 'top_header',
                        'menu_class'      => 'top_header_link',
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    ] );
                endif;
                ?>
            </div>
            <div class="hamburger_menu_list d-lg-none col-2">
                <?php get_template_part( 'part-templates/hamburger-menu' ); ?>
            </div>
		</div>
	</div>
</header>