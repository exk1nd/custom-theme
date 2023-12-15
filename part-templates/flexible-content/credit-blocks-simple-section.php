<?php
$blocks = get_sub_field( 'credit_blocks' );
if ( $blocks ):
	?>
	<div class="credit-blocks-simple-section">
		<div class="container">
			<div class="table-container">
				<?php foreach ( $blocks as $block ): ?>
					<div class="table-ithem <?php if($block['top_choice_label']): echo 'first-ithem'; endif;?>">
						<?php
						$image  = $block['image'];
						$text1  = $block['text_1'];
						$text2  = $block['text_2'];
						$text3  = $block['text_3'];
						$button = $block['button'];
						?>
						<?php if ( $image ): ?>
							<div class="table-ithem-part-logo">
								<a href="<?= $button['url'];?>" rel="nofollow" target="<?= $button['target'];?>">
									<img loading="lazy"
									     style="height: 50px;"
									     src="<?= $block['image']; ?>"
									     alt="OppLoans direct lender">
								</a>
							</div>
						<?php endif; ?>
						<?php if ( $text1 ): ?>
							<div class="table-ithem-part">
								<span class="table-ithem-part-title"><?= $text1['title']; ?></span>
								<span class="table-ithem-part-info"><?= $text1['text']; ?><br><span
										style="display: none; font-size: 12px">with AutoPay</span></span>
							</div>
						<?php endif; ?>
						<?php if ( $text2 ): ?>
							<div class="table-ithem-part">
								<span class="table-ithem-part-title"><?= $text2['title']; ?></span>
								<span class="table-ithem-part-info"><?= $text2['text']; ?></span>
							</div>
						<?php endif; ?>
						<?php if ( $text3 ): ?>
							<div class="table-ithem-part">
								<span class="table-ithem-part-title"><?= $text3['title']; ?></span>
								<span class="table-ithem-part-info"><?= $text3['text']; ?></span>
							</div>
						<?php endif; ?>
						<?php if ( $button ): ?>
							<div class="table-ithem-part-button">
								<a class="table-btn" href="<?= $button['url']; ?>" rel="nofollow"
								   target="<?= $button['target']; ?>"><?= $button['title']; ?><span
										class="table-btn-lock"></span></a>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- /.credit-blocks-simple-section -->
<?php endif; ?>