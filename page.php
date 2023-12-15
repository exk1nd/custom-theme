<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teset
 */

get_header();
$sidebar          = get_field( 'hide_sidebar' );
$disclosure       = get_field( 'advertising_disclosure' );
$intro            = get_field( 'intro_section' );
$type             = $intro['type'];
$type_image_small = 'image_small';
$type_image_large = 'image_large';
?>

	<main class="main-sidebar <?php if ( $type === $type_image_small ): echo 'intro-type-image-small'; elseif ( $type === $type_image_large ): echo 'intro-type-image-large'; endif; ?>">
		<?php get_template_part( 'part-templates/flexible-content/intro-section' ); ?>
		<?php get_template_part( 'part-templates/form-container' ); ?>
		<div class="content-holder">
			<div class="container">
				<?php if ( ! $sidebar ): ?>
				<div class="wrapper">
					<?php endif; ?>
					<section id="tableblock">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'part-templates/content', 'page' );

						endwhile; // End of the loop.
						?>

					</section>

					<?php if ( ! $sidebar ): ?>
				</div>
			<?php endif; ?>
				<?php
				if ( ! $sidebar ):
					get_sidebar();
				endif;
				?>
			</div>
			<?php if ( $disclosure ): ?>
				<?php get_template_part( 'part-templates/advertising-disclosure' ) ?>
			<?php endif; ?>
		</div>
		<?php get_template_part( 'part-templates/flexible-content' ) ?>
	</main><!-- #main -->

<?php
get_footer();
