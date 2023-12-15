<?php
$image  = get_sub_field( 'image' );
$title  = get_sub_field( 'title' );
$text   = get_sub_field( 'text' );
$social = get_sub_field( 'social' );
?>
<div class="custom-author-descr-container">
	<div class="custom-author-descr-left">
		<div class="custom-author-logo-c">
			<?php if ( $image ): ?>
				<img src="<?= $image; ?>" alt="Kathryn Pomroy">
			<?php endif; ?>
		</div>
		<div class="custom-author-social">
			<?php if ( $social['twitter_link'] ): ?>
				<a href="<?= $social['twitter_link']; ?>" target="_blank" class="social-ithem-button">
					<img src="<?= get_template_directory_uri() . '/assets/img/tw.svg' ?>" alt="image description">
				</a>
			<?php endif; ?>
			<?php if ( $social['linkedin_link'] ): ?>
				<a href="<?= $social['linkedin_link']; ?>" target="_blank"
				   class="social-ithem-button">
					<img src="<?= get_template_directory_uri() . '/assets/img/in.svg' ?>" alt="image description">
				</a>
			<?php endif; ?>
		</div>
	</div>
	<div class="custom-author-descr-right">
		<?php if ( $title ): ?>
			<span class="custom-author-descr-title"><?= $title; ?></span>
		<?php endif; ?>
		<?php if ( $text ): ?>
			<div class="custom-author-descr">
				<?= $text; ?>
			</div>
		<?php endif; ?>
	</div>
</div>