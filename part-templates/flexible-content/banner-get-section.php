<?php
$title       = get_sub_field( 'title' );
$text        = get_sub_field( 'text' );
$button      = get_sub_field( 'button' );
$footer_text = get_sub_field( 'footer_text' );
?>
<section id="banner-get">
	<div class="banner-get-conteiner">
		<?php if ( $title ): ?>
			<h3><?= $title; ?></h3>
		<?php endif; ?>
		<?php if ( $text ): ?>
			<p class="banner-get-conteiner-midlle"><?= $text; ?></p>
		<?php endif; ?>
		<?php if ( $button ): ?>
			<p><a href="<?= $button['url']; ?>" class="goto-btn"
			   target="<?= $button['target']; ?>"><?= $button['title']; ?></a></p>
		<?php endif; ?>
		<?php if ( $footer_text ): ?>
			<p class="banner-get-conteiner-footer">
				<img loading="lazy"
				     src="<?= get_template_directory_uri() . '/assets/img/ico-protection-02.svg' ?>"
				     alt="safe application" width="20" height="20">
				<?= $footer_text; ?>
			</p>
		<?php endif; ?>
	</div>
</section>