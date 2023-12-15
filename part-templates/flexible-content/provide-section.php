<?php
$title = get_sub_field( 'title' );
$items = get_sub_field( 'items' );
?>
<section class="provide-section">
	<div class="container">
		<?php if ( $title ): ?>
			<header class="section-header">
				<h2><?= $title; ?></h2>
			</header>
		<?php endif; ?>
		<?php if ( have_rows( 'items' ) ): ?>
			<div class="content-holder">
				<div class="row">
					<?php while ( have_rows( 'items' ) ) : the_row(); ?>
						<?php
						$image = get_sub_field( 'image' );
						$text  = get_sub_field( 'description' );
						?>
						<div class="col-6 col-lg-4">
							<figure class="provide-card">
								<img src="<?= $image; ?>"
								     alt="image description"
								     loading="lazy">
								<figcaption><?= $text; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- /.provide-section -->