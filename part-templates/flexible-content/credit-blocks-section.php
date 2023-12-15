<?php
if ( have_rows( 'credit_block' ) ):
	?>
	<div class="credit-blocks-section">
		<div class="container">
			<?php while ( have_rows( 'credit_block' ) ): the_row(); ?>
				<div class="credit-block">
					<?php
					$top_choice_label = 'top_choice';
					$label_type       = get_sub_field( 'label_type' );
					$image            = get_sub_field( 'image' );
					$button           = get_sub_field( 'button' );
					$header           = get_sub_field( 'header' );
					$card_options     = get_sub_field( 'card_options' );
					$collapse_options = get_sub_field( 'collapse_options' );
					?>
					<aside>
						<?php if ( $label_type !== '' ): ?>
							<span
								class="label <?php if ( $label_type === $top_choice_label ): echo 'top-choice-label'; endif; ?>">
							<?php if ( $label_type === $top_choice_label ): echo 'TOP Choice'; else: echo 'Best for Fair Credit'; endif; ?>
						</span>
						<?php endif; ?>
						<?php if ( $image ): ?>
							<figure class="img-holder">
								<img src="<?php echo $image; ?>"
								     alt="image description"
								     loading="lazy">
							</figure>
						<?php endif; ?>
						<div class="card-info d-flex d-md-none">
							<?php if ( $header['title'] ): ?>
								<h3><?php echo $header['title']; ?></h3>
							<?php endif; ?>
							<div class="rating-holder">
								<?php if ( $header['tooltip_text'] || $header['tooltip_content'] ): ?>
									<p class="tooltip-text" data-bs-toggle="tooltip" data-bs-placement="bottom"
									   title="<?php echo $header['tooltip_content']; ?>">
										<?php echo $header['tooltip_text']; ?>
									</p>
								<?php endif; ?>
								<?php if ( $header['rating_value'] || $header['rating_image'] ): ?>
									<div class="rating-info">
										<?php echo $header['rating_value']; ?>
										<figure class="img-holder">
											<img src="<?php echo $header['rating_image']; ?>"
											     alt="image description"
											     loading="lazy">
										</figure>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<?php if ( $button ): ?>
							<a href="<?php echo $button['link']; ?>" class="btn btn-primary"><?php echo $button['text']; ?></a>
						<?php endif; ?>
					</aside>
					<div class="content-holder">
						<header class="d-none d-md-flex">
							<?php if ( $header['title'] ): ?>
								<h3><?php echo $header['title']; ?></h3>
							<?php endif; ?>
							<?php if ( $header['rating_value'] || $header['rating_image'] ): ?>
								<div class="rating-holder">
									<?php echo $header['rating_value']; ?>
									<figure class="img-holder">
										<img src="<?php echo $header['rating_image']; ?>"
										     alt="image description"
										     loading="lazy">
									</figure>
									<?php if ( $header['tooltip_text'] || $header['tooltip_content'] ): ?>
										<p class="tooltip-text" data-bs-toggle="tooltip" data-bs-placement="bottom"
										   title="<?php echo $header['tooltip_content']; ?>">
											<?php echo $header['tooltip_text']; ?>
										</p>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</header>
						<div class="lists-holder">
							<?php if ( $card_options ): ?>
								<ul class="options-list">
									<?php foreach ( $card_options as $card ): ?>
										<li><?php echo $card['title']; ?> <strong><?php echo $card['content']; ?></strong></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
							<?php if ( $collapse_options ): ?>
								<div class="collapse-holder">
									<div class="collapse" id="collapse-<?php echo get_row_index(); ?>">
										<ul class="options-list">
											<?php foreach ( $collapse_options as $card ): ?>
												<li><?php echo $card['title']; ?> <strong><?php echo $card['content']; ?></strong>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="link-holder">
							<a class="collapse-link" data-bs-toggle="collapse" href="#collapse-<?php echo get_row_index(); ?>"
							   aria-expanded="false">
								<span class="link-text" data-text-open="view details" data-text-close="hide details"></span></a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<!-- /.credit-blocks-section -->
<?php endif; ?>