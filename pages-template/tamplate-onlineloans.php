<?php
/* Template Name: Tamplate Online Loans
Template Post Type: post, page, cinema
*/
get_header();
?>

<? get_template_part( 'part-templates/form-container-onlineloans' ); ?>
<?php
if ( is_search() ) : // Only display Excerpts for Search.
    ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- /.entry-summary -->
<?php
else :
    ?>
    <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'starter_pack' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'starter_pack' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div>
<?php
endif;
?>

<?php get_footer(); ?>
<style>
.form-container {
    background-image: none;
}
.bg-blue {
    margin-top: 70px;
}
.store-icons img {
    display: none;
}
.store-icons::after {
    display: none;
}
.store-icons:before {
    display: none;
}
#footer {
    margin-top: 0;
}
@media (max-width: 568px) {
.bg-blue {
    margin-top: 58px;
}
.new-pre-form-title {
    margin: 25px 0 30px 0;
    text-align: center;
}
.new-pre-form button {
    font-size: 22.5px;
}
}
</style>