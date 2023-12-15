<?php
?>
<section class="reviews-section">
	<?php if ( have_rows( 'rating' ) ): ?>
		<div class="container">
			<div class="rating-block">
				<ul>
					<?php while ( have_rows( 'rating' ) ) : the_row(); ?>
						<?php
						$rating     = get_sub_field( 'rating' );
						$rating_img = get_sub_field( 'rating_image' );
						$logo       = get_sub_field( 'logo' );
						?>
						<li>
							<?php if ( $rating ): ?>
								<span class="rating-value"><?= $rating; ?></span>
							<?php endif; ?>
							<?php if ( $rating_img ): ?>
								<figure class="stars-holder">
									<img src="<?= $rating_img; ?>" alt="image description" loading="lazy">
								</figure>
							<?php endif; ?>
							<?php if ( $logo ): ?>
								<figure class="logo-holder">
									<img src="<?= $logo; ?>" alt="image description" loading="lazy">
								</figure>
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
	<?php if ( have_rows( 'reviews' ) ): ?>
		<div class="swiper swiper-reviews">
			<div class="swiper-wrapper">
				<?php while ( have_rows( 'reviews' ) ) : the_row(); ?>
					<?php
					$photo  = get_sub_field( 'photo' );
					$name   = get_sub_field( 'name' );
					$rating = get_sub_field( 'rating' );
					$text   = get_sub_field( 'text' );
					?>
					<div class="swiper-slide">
						<div class="review-card">
							<figure class="img-holder">
								<?php if ( $photo ): ?>
									<img src="<?= $photo; ?>" alt="image description" loading="lazy">
								<?php endif; ?>
								<figcaption>
									<?php if ( $name ): ?>
										<strong><?= $name; ?></strong>
									<?php endif; ?>
									<?php if ( $rating ): ?>
										<img src="<?= $rating; ?>" alt="image description" loading="lazy">
									<?php endif; ?>
								</figcaption>
							</figure>
							<?php if ( $text ): ?>
								<div class="text-holder">
									<?= apply_filters( 'the_content', $text ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	<?php endif; ?>
</section>
<!-- /.reviews-section -->