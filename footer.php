
<?php
?>

<footer id="footer">
	<div class="container">
		<div class="footer-top-part">
			<div class="footer-top-part-menu-block">
				<div class="footer-top-part-menu-legal">
                    <p>Contact</p>
                    <ul>
                        <li><a href="tel:1-585-282-6958">+380938362133</a></li>
                        <li><a href="mailto:info@triceloans.com">@exk1nd</a></li>
                    </ul>
				</div>

				<div class="footer-top-part-menu-other">
					<?php
					if ( has_nav_menu( 'footer-menu' ) ) :
						wp_nav_menu( [
							'theme_location'  => 'footer-menu',
							'menu'            => 'Footer Menu Other',
							'container'       => 'nav',
							'container_class' => 'footer_menu',
							'menu_class'      => 'footer_menu_link',
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						] );
					endif;
					?>
				</div>

                <div class="footer-top-part-menu-other">
                </div>

                <div class="footer-top-part-menu-other">
                </div>

                <div class="footer-top-part-logo">

                </div>
			</div>
		</div>
		<?php if ( $footer_text ): ?>
			<div class="footer-text-holder">
				<?= apply_filters( 'the_content', $footer_text ); ?>
			</div>
		<?php endif; ?>
		<div class="footer-copyright-part">
			<p><?php echo currentYear(); ?> @ test</p>
		</div>
	</div>
</footer>
<?php
$form_modal = get_field( 'form_modal', 'options' );
?>
<?php
wp_footer();
?>
</body>

</html>