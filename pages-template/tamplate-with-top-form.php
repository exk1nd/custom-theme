<?php
/* Template Name: Tamplate With Top Form
Template Post Type: post, page, cinema
*/
get_header();
?>

<? get_template_part( 'part-templates/form-container' ); ?>
<?php
if ( is_search() ) : // Only display Excerpts for Search.
    ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
<?php
else :
    ?>
    <div class="container-my">
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'starter_pack' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'starter_pack' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div>
    </div>
<?php
endif;
?>

<?php get_footer(); ?>