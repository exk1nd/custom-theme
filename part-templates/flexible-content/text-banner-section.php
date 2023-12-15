<?php
$title   = get_sub_field( 'title' );
$content = get_sub_field( 'content' );
?>
<section class="text-banner-section">
	<div class="container">
		<?php if ( $title ): ?>
			<header class="section-header">
				<h2><?= $title; ?></h2>
			</header>
		<?php endif; ?>
		<?php if ( $content ): ?>
			<div class="text-holder">
				<?= apply_filters( 'the_content', $content ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- /.text-banner-section -->