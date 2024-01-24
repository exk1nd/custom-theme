<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teset
 */
$hub_page             = get_field( 'is_it_hub_page' );
if ( ! $hub_page ):
	$id = get_the_ID();
	$group             = get_field( 'page_group', $id );
	if ( $group ):
		$priority = get_field( 'page_priority', $id );
		$posts_per_page = -1;
		if ( intval( $priority ) <= 3 ): $posts_per_page = 3;
		else: $posts_per_page = 5; endif;

		$wpc_report_args = array(
//	'posts_per_page' => $posts_per_page,
			'orderby'      => 'meta_value',
			'meta_key'     => 'page_priority',
			'order'        => 'ASC',
			'post__not_in' => array( $id ),
			'post_type'    => array( 'page', 'post' ),
			'meta_query'   => array(
				array(
					'key'     => 'page_group',
					'value'   => $group,
					'compare' => '=',
				)
			)
		);

		$the_query = new WP_Query( $wpc_report_args );
		?>

		<?php if ( $the_query->have_posts() ): ?>
		<aside class="sidebar">
			<h3 class="sidebar-title">Featured Articles</h3>
			<div class="sidebar-item">
				<?php
				$arr = array();

				while ( $the_query->have_posts() ) : $the_query->the_post();
					$id              = get_the_ID();
					$single_priority = get_field( 'page_priority', $id );
					$arr[ $id ]      = $single_priority;
				endwhile;

				$arr = array_unique( $arr );

//				while ( count( $arr ) <= $posts_per_page ):
//					while ( $the_query->have_posts() ) : $the_query->the_post();
//						$id              = get_the_ID();
//						$single_priority = get_field( 'page_priority', $id );
//						$arr[ $id ]      = $single_priority;
//					endwhile;
//				endwhile;
//				while ( count( $arr ) > $posts_per_page ):
//					array_pop( $arr );
//				endwhile;
				?>
				<?php if ( $arr ): ?>
					<?php foreach ( $arr as $key => $value ): ?>
						<?php
						$post  = get_post( $key );
						$ID    = get_the_ID();
						$intro = get_field( 'intro_section', $ID );
						?>
						<div class="sidebar-item-container">
							<div class="sidebar-item-img">
								<?php if ( $intro && $intro['image'] ): ?>
									<img loading="lazy" src=" <?= $intro['image']; ?>" alt="I need money">
								<?php else: ?>
									<img loading="lazy" src=" <?= get_the_post_thumbnail_url(); ?>" alt="I need money">
								<?php endif; ?>
							</div>
							<div class="sidebar-item-info">
								<a class="sidebar-item-title" href="<?php the_permalink(); ?>"
									title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</aside>
	<?php endif; ?>
		<?php wp_reset_query(); ?>
	<?php endif; ?>
<?php else: ?>
	<aside class="sidebar">

	</aside>
<?php endif; ?>
