<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package teset
 */

get_header();
$sidebar = get_field( 'hide_sidebar' );
?>

	<main class="main-wrapper">
        <div class="container breadcrumb-table">
            <?php
            if ( function_exists( 'yoast_breadcrumb' ) ) {
                yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
            }
            ?>
            <div class="advertising-table">
                <label for="toggle-important">
                    <span id="table-container-important" class="table-container-important">Advertising Disclosure</span>
                </label>
                <input id="toggle-important" type="checkbox">
                <label for="toggle-important" class="toggle-close"></label>
                <span id="table-container-important-text" class="table-container-important-text">TriceLoans is a publisher supported by advertising that gets compensated in exchange for your clicking on links posted here. Being an independent comparison service, TriceLoans may feature sponsored services and products based on the compensation rate.</span>
            </div>
        </div>
		<?php get_template_part( 'part-templates/flexible-content/intro-section' ); ?>
		<?php if ( strlen( get_the_content() ) ): ?>
			<section class="content-holder">
				<div class="container">
					<?php if ( ! $sidebar ): ?>
					<div class="wrapper">
						<?php endif; ?>
						<div id="tableblock" data-page-id="<?= get_the_ID(); ?>">
							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'part-templates/content', get_post_type() );

							endwhile; // End of the loop.
							?>

						</div>
						<?php if ( ! $sidebar ): ?>
					</div>
				<?php endif; ?>
					<?php
					if ( ! $sidebar ):
						get_sidebar();
					endif;
					?>
				</div>
			</section>
		<?php endif; ?>
		<?php get_template_part( 'part-templates/flexible-content' ) ?>
	</main><!-- #main -->

<?php
get_footer();
