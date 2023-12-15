<?php
?>
   <?php if( have_rows('faq') ): ?>
        <?php while ( have_rows('faq') ) : the_row(); ?>
        <div class="accordion" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <a class="active">
                        <h4 itemprop="name"><?php the_sub_field('question'); ?></h4>
                    </a>
                    <div class="conte active" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text"><?php the_sub_field('answer'); ?></p>
                    </div>
                </div>
         </div>
    <?php endwhile; ?>

      <?php else : ?>

      <?php endif; ?>
      <style>
      .accordion-item {
          border: none;
      }
      </style>