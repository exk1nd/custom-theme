<?php
$title     = get_sub_field( 'title' );
$col_left  = get_sub_field( 'column_left' );
$col_right = get_sub_field( 'column_right' );
?>
<section class="content-2-columns">
	<?php if ( $title ): ?>
		<h3><?= $title; ?></h3>
	<?php endif; ?>
	<div class="content-2-columns-container">
		<div class="content-2-columns-container-text">
			<?php if ( $col_left ): ?>
				<?= $col_left; ?>
			<?php endif; ?>
		</div>
		<div class="content-2-columns-container-text">
			<?php if ( $col_right ): ?>
				<?= $col_right; ?>
			<?php endif; ?>
		</div>
	</div>
</section>