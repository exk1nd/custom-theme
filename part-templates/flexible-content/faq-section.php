<?php
$title         = get_sub_field( 'title' );
$faq_items     = get_sub_field( 'faq_items' );
$button_toggle = get_sub_field( 'show_button' );
$button        = get_sub_field( 'button' );
?>
<div class="advantages-list-content-faq">
	<div class="container">
		<div class="accordion" itemscope="" itemtype="https://schema.org/FAQPage">
			<?php if ( $title ): ?>
				<h2 style="text-align: center;"><?= $title; ?></h2>
			<?php endif; ?>
			<?php foreach ( $faq_items as $item ): ?>
				<div class="accordion-item" itemscope="" itemprop="mainEntity"
				     itemtype="https://schema.org/Question">
					<a class="accordion-link"><h4 itemprop="name"><?= $item['title']; ?></h4></a>
					<div class="conte" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
						<?= $item['content']; ?>
					</div>
				</div>
			<?php endforeach; ?>
			<?php if ( $button_toggle ): ?>
				<div class="btn-holder">
					<a href="<?= $button['url']; ?>" target="<?= $button['target']; ?>"
					   class="btn btn-primary"><?= $button['title']; ?></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>