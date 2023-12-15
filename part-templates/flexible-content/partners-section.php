<section class="partners-section">
	<div class="container">
		<header class="section-header">
			<h2>Our partners</h2>
		</header>
		<?php if ( have_rows( 'partners' ) ): ?>
			<div class="inner-holder">
				<ul class="nav nav-tabs" id="myTab">
					<?php while ( have_rows( 'partners' ) ) : the_row(); ?>
						<?php
						$image = get_sub_field( 'tab_image' );
						?>
						<li class="nav-item">
							<a href="#tab-0<?= get_row_index(); ?>"
							   class="nav-link <?php if ( get_row_index() === 1 ): echo 'active'; endif; ?>"
							   data-bs-toggle="tab">
								<figure class="img-holder">
									<img src="<?= $image; ?>" alt="image description" loading="lazy">
								</figure>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
				<div class="tab-content" id="myTabContent">
					<?php while ( have_rows( 'partners' ) ) : the_row(); ?>
						<?php
						$content = get_sub_field( 'tab_content' );
						?>
						<div class="tab-pane fade <?php if ( get_row_index() === 1 ): echo 'show active'; endif; ?>"
						     id="tab-0<?= get_row_index(); ?>">
							<?= apply_filters('the_content', $content); ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- /.partners-section -->