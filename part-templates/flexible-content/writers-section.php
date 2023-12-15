<?php
$title = get_sub_field( 'title' );

?>
<section class="writers-section" id="writers-section">
	<div class="container">
		<?php if ( $title ): ?>
			<header class="section-header">
				<h2><?= $title; ?></h2>
			</header>
		<?php endif; ?>
		<?php if ( have_rows( 'writers' ) ): ?>
			<div class="grid-holder">
				<div class="row">
					<?php while ( have_rows( 'writers' ) ) : the_row(); ?>
						<?php
						$image  = get_sub_field( 'image' );
						$info   = get_sub_field( 'writer_info' );
						$text   = get_sub_field( 'text' );
						$footer = get_sub_field( 'footer_logos' );
						?>
						<div class="col-md-6 col-lg-4">
							<div class="writer-card">
								<figure class="img-holder">
									<?php if ( $image ): ?>
										<div class="img">
											<img src="<?= $image; ?>" alt="image description" loading="lazy">
										</div>
									<?php endif; ?>
									<?php if ( $info ): ?>
										<figcaption>
											<h3><?= $info['name']; ?></h3>
											<p><?= $info['position']; ?></p>
											<ul>
												<?php if ( $info['twitter'] ): ?>
													<li class="twitter-item">
														<a href="<?= $info['twitter']['url']; ?>">
<!--															<figure class="ico-holder">-->
<!--																<img src="--><?php //= get_template_directory_uri(); ?><!--/assets/img/tw.svg"-->
<!--																     alt="image description" loading="lazy">-->
<!--															</figure>-->
														</a>
													</li>
												<?php endif; ?>
												<?php if ( $info['linkedin'] ): ?>
													<li class="linkedin-item">
														<a href="<?= $info['linkedin']['url']; ?>">
<!--															<figure class="ico-holder">-->
<!--																<img src="--><?php //= get_template_directory_uri(); ?><!--/assets/img/in.svg"-->
<!--																     alt="image description" loading="lazy">-->
<!--															</figure>-->
														</a>
													</li>
												<?php endif; ?>
											</ul>
										</figcaption>
									<?php endif; ?>
								</figure>
								<?php if ( $text ): ?>
									<div class="text-holder">
										<?= apply_filters( 'the_content', $text ); ?>
									</div>
								<?php endif; ?>
								<?php if ( have_rows( 'footer_logos' ) ): ?>
									<footer>
										<ul>
											<?php while ( have_rows( 'footer_logos' ) ) : the_row(); ?>
												<?php
												$logo = get_sub_field( 'logo' );
												?>
												<li>
													<figure>
														<img
															src="<?= $logo; ?>" alt="image description" loading="lazy">
													</figure>
												</li>
											<?php endwhile; ?>
										</ul>
									</footer>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- /.writers-section -->