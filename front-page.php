<?php
/* Template Name: Home Page
Template Post Type: page
*/
get_header();
?>


	<main class="home-page">
		<?= get_template_part( 'part-templates/flexible-content' ); ?>
	</main>

<?php get_footer(); ?>