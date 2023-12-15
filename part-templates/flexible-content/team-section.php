<?php
$title = get_sub_field( 'title' );
$text  = get_sub_field( 'text' );
$image = get_sub_field( 'image' );
?>
<section class="team-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="text-holder">
					<h2><?= $title; ?></h2>
					<?= apply_filters('the_content', $text);?>
				</div>
			</div>
			<div class="col-md-6">
				<figure class="img-holder">
					<?php if ( $image['image_mobile'] ): ?>
						<picture>
							<source srcset="<?= $image['image_mobile']; ?>" media="(max-width: 767px)">
							<img src="<?= $image['image_desktop'] ?>" alt="image description" loading="lazy">
						</picture>
					<?php else: ?>
						<img src="<?= $image['image_desktop'] ?>" alt="image description" loading="lazy">
					<?php endif; ?>
				</figure>
			</div>
		</div>
	</div>
</section>
<!-- /.team-section -->