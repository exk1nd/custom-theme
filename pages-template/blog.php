<?php
/* Template Name: Blog
Template Post Type: post, page, cinema
*/
get_header();

?>
<?php
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // на статической главной странице используется 'page' вместо 'paged'
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$custom_query_args = array(
    'post_type' => 'post',
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $paged,
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
    //'category_name' => 'custom-cat',
    'order' => 'DESC', // 'ASC'
    'orderby' => 'date' // modified | title | name | ID | rand
);
$custom_query = new WP_Query( $custom_query_args );
?>

<?php
$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>10)); ?>

<?php if ( $allPostsWPQuery->have_posts() ) : ?>

    <main class="main-sidebar">
    <section class="wrapper blog-table">
    <div class="container">

        <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            <p>Last Updated <?php the_time('j.m.Y'); ?></p>
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
        <?php endwhile; ?>

    </div>
    </section>

    <aside class="sidebar">
        <h3 class="sidebar-title">Featured Articles</h3>
        <div class="sidebar-item">
            <div class="sidebar-item-container">
                <div class="sidebar-item-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/loan-for-rent-now.jpg'?>" width="100%" align="center" alt="Best Loans For Rent Payment">
                </div>
                <div class="sidebar-item-info">
                    <a class="sidebar-item-title" href="/what-are-emergency-loans-for-rent/" title="Permalink to Need Money Desperately? Check for Your Fast Cash Options Now">Need Money for Rent? Here Is How to Come Through</a>
                    <p class="sidebar-item-date">November 09, 2021</p>

                </div>
            </div>
            <div class="sidebar-item-container">
                <div class="sidebar-item-img">
                    <img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/100-dollar-loan.jpeg'?>" alt="100 dollar loan" width="100%">
                </div>
                <div class="sidebar-item-info">
                    <a class="sidebar-item-title" href="/100-dollar-loan/" title="Permalink to I Need 100 Dollar Loan Today? Here’s How to Get a Small Loan Fast">I Need 100 Dollar Loan Today? Here’s How to Get a Small Loan Fast</a>
                    <p class="sidebar-item-date">November 07, 2021</p>

                </div>
            </div>
            <div class="sidebar-item-container">
                <div class="sidebar-item-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/best-loan-apps.jpeg'?>" width="100%" align="center" alt="Best Apps That Loan You">
                </div>
                <div class="sidebar-item-info">
                    <a class="sidebar-item-title" href="/best-cash-advance-apps/" title="Permalink to Best Apps That Loan You Money">Best Apps That Loan You Money</a>
                    <p class="sidebar-item-date">November 11, 2021</p>

                </div>
            </div>
        </div>
    </aside>
    </main>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'There no posts to display.' ); ?></p>
<?php endif; ?>
<?php if ($custom_query->max_num_pages > 1) : ?>
    <?php
    $orig_query = $wp_query;
    $wp_query = $custom_query;
    ?>
    <nav class="prev-next-posts">
        <div class="next-posts-link">
            <?php echo get_previous_posts_link( 'Previous' ); ?>
        </div>
        <div class="prev-posts-link">
            <?php echo get_next_posts_link( 'Next', $custom_query->max_num_pages ); ?>
        </div>
    </nav>
    <?php
    $wp_query = $orig_query;
    ?>
<?php endif; ?>

<?php get_footer(); ?>