<?php
?>
   <?php if( have_rows('table') ): ?>
        <?php while ( have_rows('table') ) : the_row(); ?>
    <div class="new-table-block" style="margin-bottom: 20px;">
                <div class="new-table-top">
                    <div class="col-50">
                        <span class="top-marker"><?php the_sub_field('number'); ?></span>
                        <div class="new-table-img"><a href="<?php the_sub_field('link'); ?>"><img loading="lazy" src="<?php the_sub_field('image'); ?>" width="280" height="60"></a></div>
                        <a class="new-table-green-button" href="<?php the_sub_field('link'); ?>" rel="nofollow" target="_blank">VISIT
                            SITE<span class="visit-lock"></span></a>
                    </div>
                    <div class="col-50">
                        <span class="green-best-marker">Best for Fair Credit</span>
                        <p class="new-table-title" style=""><?php the_sub_field('name'); ?></p>
                        <div class="new-table-rating"><?php the_sub_field('rate'); ?>
                            <div class="new-table-rating-star">
                                <div class="<?php the_sub_field('rame_image'); ?>"></div><?php the_sub_field('rame_image_05_star'); ?>
                            </div>
                            <div class="new-table-info"></div>
                            <p class="wwe">this rating is our subjective opinion</p>
                        </div>
                        <hr class="hr">
                        <div class="new-table-r-descr">
                            <div>
                                <p>Minimum Credit Score</p>
                                <p><?php the_sub_field('minimum_credit_score'); ?></p>
                            </div>
                            <div>
                                <p>APR Range</p>
                                <p><?php the_sub_field('apr_range'); ?><span>with autopay</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-table-bottom">
                    <input id="table-view-<?php the_sub_field('number'); ?>" class="table-view" type="checkbox">
                    <table class="new-table-middle">
                        <tbody>
                        <?php if( have_rows('details') ): ?>
                    <?php while( have_rows('details') ): the_row(); ?>
                        <tr>
                            <td><?php the_sub_field('details_title'); ?></td>
                            <td><?php the_sub_field('details_text'); ?></td>
                        </tr>
                            <?php endwhile; ?>

                  <?php endif; ?>
                        </tbody>
                    </table>
                    <label for="table-view-<?php the_sub_field('number'); ?>" class="new-table-view">View Details<span class="new-arrow"></span></label>
                    <label for="table-view-<?php the_sub_field('number'); ?>" class="new-table-view view-close">Hide Details<span class="new-arrow"></span></label>
                </div>
            </div>
    <?php endwhile; ?>

      <?php else : ?>

      <?php endif; ?>
<style>
.top-marker {
    width: 35px;
    height: 30px;
}
</style>