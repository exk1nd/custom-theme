<?php
$title = get_sub_field( 'title' );
$left  = get_sub_field( 'column_left' );
$right = get_sub_field( 'column_right' );
?>
<section class="text-image-columns-section">
	<div class="container">
		<?php if ( $title ): ?>
			<h2 style="text-align: center;"><?= $title; ?></h2>
		<?php endif; ?>
		<div class="row align-items-end">
			<div class="col-lg-6">
				<?php
				if ( $left['text'] ):?>
					<div class="text-holder">
						<?= $left['text']; ?>
					</div>
				<?php elseif ( $left['image'] ): ?>
					<figure class="img-holder">
						<img loading="lazy" src="<?= $left['image']; ?>" alt="bad credit loans guaranteed approval"
						     width="664" height="325">
					</figure>
				<?php endif; ?>
			</div>
			<div class="col-lg-6">
				<?php
				if ( $right['text'] ): ?>
					<div class="text-holder">
						<?= $right['text']; ?>
					</div>
				<?php elseif ( $right['image'] ): ?>
					<figure class="img-holder">
						<img loading="lazy" src="<?= $right['image']; ?>" alt="bad credit loans guaranteed approval"
						     width="664" height="325">
					</figure>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>