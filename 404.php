<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
*/

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' );
?>
<div id="post-0" class="content error404 not-found">
	<h1 class="entry-title"><?php esc_html_e( 'Not found', 'starter_pack' ); ?></h1>
	<div class="entry-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'starter_pack' ); ?></p>
	</div>
</div>
<?php
get_footer();
