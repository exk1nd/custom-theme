<?php if ( have_rows( 'flexible_content' ) ): ?>

	<?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>

		<?php if ( get_row_layout() == 'credit_blocks' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/credit-blocks-section' ); ?>

		<?php elseif ( get_row_layout() == 'text_section' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/text-section' ); ?>

		<?php elseif ( get_row_layout() == 'text_image_columns' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/text-image-columns' ); ?>

		<?php elseif ( get_row_layout() == 'banner_get' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/banner-get-section' ); ?>

		<?php elseif ( get_row_layout() == 'steps_section' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/steps-section' ); ?>

		<?php elseif ( get_row_layout() == 'text_columns' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/text-columns-section' ); ?>

		<?php elseif ( get_row_layout() == 'benefits' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/benefits-section' ); ?>

		<?php elseif ( get_row_layout() == 'banner_waste' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/banner-waste-section' ); ?>

		<?php elseif ( get_row_layout() == 'advantages' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/advantages-section' ); ?>

		<?php elseif ( get_row_layout() == 'author' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/author-section' ); ?>

		<?php elseif ( get_row_layout() == 'faq' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/faq-section' ); ?>

		<?php elseif ( get_row_layout() == 'team' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/team-section' ); ?>

		<?php elseif ( get_row_layout() == 'writers' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/writers-section' ); ?>

		<?php elseif ( get_row_layout() == 'reviews' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/reviews-section' ); ?>

		<?php elseif ( get_row_layout() == 'social' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/social-section' ); ?>

		<?php elseif ( get_row_layout() == 'credit_blocks_no_collapse' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/credit-blocks-simple-section' ); ?>

		<?php elseif ( get_row_layout() == 'provide' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/provide-section' ); ?>

		<?php elseif ( get_row_layout() == 'partners' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/partners-section' ); ?>

		<?php elseif ( get_row_layout() == 'text_banner' ): ?>

			<?php get_template_part( 'part-templates/flexible-content/text-banner-section' ); ?>

		<?php endif; ?>

	<?php endwhile; ?>

<?php endif; ?>