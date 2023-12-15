<?php
/* Template Name: Tamplate Blog Default
Template Post Type: post, page, cinema
*/
get_header();
?>

<main class="main-sidebar">
    <div class=wrapper>
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
</div>
<aside class="sidebar">
       <h3 class="sidebar-title">Featured Articles</h3>
       <div class="sidebar-item">
           <div class="sidebar-item-container">
               <div class="sidebar-item-img">
                   <img src="<?= get_template_directory_uri() . '/assets/img/loan-for-rent-now.jpg'?>" width="100%" align="center" alt="Best Loans For Rent Payment">
               </div>
               <div class="sidebar-item-info">
                   <a class="sidebar-item-title" href="/what-are-emergency-loans-for-rent/" title="Permalink to Need Money Desperately? Check for Your Fast Cash Options Now">Need Money for Rent? Here Is How to Come Through</a>
                   <p class="sidebar-item-date">November 09, 2022</p>

               </div>
           </div>
           <div class="sidebar-item-container">
               <div class="sidebar-item-img">
                   <img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/100-dollar-loan.jpeg'?>" alt="100 dollar loan" width="100%">
               </div>
               <div class="sidebar-item-info">
                   <a class="sidebar-item-title" href="/100-dollar-loan/" title="Permalink to I Need 100 Dollar Loan Today? Here’s How to Get a Small Loan Fast">I Need 100 Dollar Loan Today? Here’s How to Get a Small Loan Fast</a>
                   <p class="sidebar-item-date">November 07, 2022</p>
                   
               </div>
           </div>
          <div class="sidebar-item-container">
               <div class="sidebar-item-img">
                   <img src="<?= get_template_directory_uri() . '/assets/img/best-loan-apps.jpeg'?>" width="100%" align="center" alt="Best Apps That Loan You">
               </div>
               <div class="sidebar-item-info">
                   <a class="sidebar-item-title" href="/best-cash-advance-apps/" title="Permalink to Best Apps That Loan You Money">Best Apps That Loan You Money</a>
                   <p class="sidebar-item-date">November 11, 2022</p>
                   
               </div>
           </div>
       </div>
</aside>
</main>

<?php get_footer(); ?>