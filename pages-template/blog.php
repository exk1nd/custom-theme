<?php
/*
Template Name: Blog
*/

get_header();

?>

<main class="container">
    <div class="custom-container">
        <?php
        $args = array(
            'post_type' => 'custom_type',
            'posts_per_page' => 2,
        );

        $custom_query = new WP_Query($args);

        if ($custom_query->have_posts()) :
            while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <div class="custom-card">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <p><?php echo get_the_date(); ?></p>
                </div>

            <?php endwhile;

        else :
            echo 'No custom items found';
        endif;

        wp_reset_postdata();
        ?>
    </div>

    <button id="load-more-button">Load More</button>
</main>

<script>
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    var page = 2;
    var loading = false;

    jQuery(document).ready(function ($) {
        $('#load-more-button').click(function () {
            if (!loading) {
                loading = true;

                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'load_more_posts',
                        page: page,
                    },
                    success: function (response) {
                        if (response.trim() !== 'No more posts') {
                            $('.custom-container').append(response);
                            page++;
                        } else {
                            $('#load-more-button').hide();
                        }
                        loading = false;
                    },
                });
            }
        });
    });
</script>

<?php get_footer(); ?>
