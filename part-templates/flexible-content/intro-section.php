<?php

$intro_toggle = get_field( 'intro_toggle' );
$intro        = get_field( 'intro_section' );

?>
<?php if ( $intro_toggle ): ?>
	<?php
	$type             = $intro['type'];
	$title            = $intro['title'];
	$subtitle         = $intro['subtitle'];
	$image            = $intro['image'];
	$type_image_small = 'image_small';
	$type_image_large = 'image_large';
	?>
	<section
		class="intro-section <?php if ( $type === $type_image_small ): echo 'intro-type-image-small'; elseif ( $type === $type_image_large ): echo 'intro-type-image-large'; endif; ?>">
		<div class="container">
			<?php if ( $type !== $type_image_large && $type !== $type_image_small && function_exists( 'yoast_breadcrumb' ) ): ?>
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
				}
				?>
			<?php endif; ?>
			<div class="inner">
				<div class="content-holder">
					<?php if ( $type === $type_image_small || $type === $type_image_large ): ?>
						<figure class="img-holder">
							<img src="<?php echo $image; ?>" alt="image description" loading="lazy">
						</figure>
					<?php endif; ?>
					<div class="text-holder">
						<?php if ( $title ): ?>
							<h1><?php echo $title; ?></h1>
						<?php endif; ?>
						<?php if ( $subtitle ): ?>
							<p><?php echo $subtitle; ?></p>
						<?php endif; ?>
					</div>
				</div>
				<?php if ( $type === $type_image_small || $type === $type_image_large ): ?>
					<aside class="intro-aside">
						<figure class="author-holder">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
							<figcaption>
								Edited by <a href="<?= get_site_url(); ?>/about#writers-section"><b><?php echo get_the_author(); ?></b></a>
							</figcaption>
						</figure>
						<?php if ( $type === $type_image_large && $image ): ?>
							<figure class="img-holder">
								<img src="<?php echo $image; ?>" alt="image description" loading="lazy">
							</figure>
						<?php endif; ?>
					</aside>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- /.intro-section -->
<?php endif; ?>
