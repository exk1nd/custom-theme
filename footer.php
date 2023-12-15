<!-- section-footer -->
<?php
?>
<?php if( have_rows('faq') ): ?>
        <?php while ( have_rows('faq') ) : the_row(); ?>
<div class="container">
<h4>F.A.Q.:</h4>
	<?php if( have_rows('faq_details') ): ?>
                    <?php while( have_rows('faq_details') ): the_row(); ?>
<div class="accordion" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="accordion-item" itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <a class="active">
                        <h4 itemprop="name"><?php the_sub_field('faq_question'); ?></h4>
                    </a>
                    <div class="conte active" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text"><?php the_sub_field('faq_answer'); ?></p>
                    </div>
                </div>
         </div>
	<?php endwhile; ?>
                  <?php endif; ?>
	</div>
	<?php endwhile; ?>

      <?php else : ?>

      <?php endif; ?>
<?php if( have_rows('additional_personal_loans_resources') ): ?>
        <?php while ( have_rows('additional_personal_loans_resources') ) : the_row(); ?>
<div class="container">
 <h4>Additional Personal Loans Resources:</h4>
 <ul>
	<?php if( have_rows('additional_personal_loans_details') ): ?>
                    <?php while( have_rows('additional_personal_loans_details') ): the_row(); ?>
                        <li><a href="<?php the_sub_field('additional_personal_loans_link'); ?>" style="font-size: 16px;"><?php the_sub_field('additional_personal_loans_title'); ?></a></li>
                            <?php endwhile; ?>
                  <?php endif; ?>
 </ul>
</div>
	<?php endwhile; ?>

      <?php else : ?>

      <?php endif; ?>
<footer id="footer">
    <div class="footer-top-part">
        <div class="footer-top-part-logo-block">
            <div class="footer-top-part-logo">
                <a href="<?= get_home_url(); ?>" rel="dofollow">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Logo-pds-footer.svg'?>" width="89" height="76" alt="Payday Say Loans">
                </a>
            </div>
        </div>
        <div class="footer-top-part-menu-block">
            <div class="footer-top-part-menu-legal">
                <span>Legal</span>
                <?php
                if(has_nav_menu('footer-menu')) :
                    wp_nav_menu([
                        'theme_location' => 'footer-menu',
                        'menu' => 'Footer Menu',
                        'container' => 'nav',
                        'container_class' => 'footer_menu',
                        'menu_class' => 'footer_menu_link',
                        'fallback_cb' => 'wp_page_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                    ]);
                endif;
                ?>
            </div>

            <div class="footer-top-part-menu-other">
                <span>Other</span>
                <?php
                if(has_nav_menu('footer-menu')) :
                    wp_nav_menu([
                        'theme_location' => 'footer-menu',
                        'menu' => 'Footer Menu Other',
                        'container' => 'nav',
                        'container_class' => 'footer_menu',
                        'menu_class' => 'footer_menu_link',
                        'fallback_cb' => 'wp_page_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                    ]);
                endif;
                ?>
            </div>
        </div>
        <div class="footer-top-part-menu-logos mob-fb">
            <p style="font-weight: 600;font-size: 20px;line-height: 24px;font-family: Manrope, sans-serif;color: #393A66;">Social Media</p>
            <div style="text-align: left; gap=0;">
                <a href="https://www.facebook.com/paydaysayservice" target="_blank">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri(); ?>/assets/img/footer-fb-icon.svg" alt="FB icon" width="24" height="24">
                </a>
            </div>
        </div>
        <div class="footer-top-part-menu-logos">
            <div style="text-align: center;">
                <a href="https://www.trustpilot.com/review/paydaysay.com" target="_blank">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/norton-icon.svg'?>" alt="Trustpilot" width="120" height="45">
                </a>
            </div>
            <div style="text-align: center;">
                <a href="https://safeweb.norton.com/report/show?url=https://paydaysay.com/" target="_blank">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/trust-icon.svg'?>" alt="Norton Security" width="120" height="45">
                </a>
            </div>
            <div style="text-align: center;">
                <a>
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/image-10.svg'?>" width="120" height="45" alt="Better Business Bureau Paydaysay">
                </a>
            </div>
            <div style="text-align: center;">
                <a>
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/image-8.svg'?>" width="120" height="45" alt="dun&bradstreet">
                </a>
            </div>
        </div>
    </div>
    <div class="container-my">
        <picture>
            <source srcset="<?= get_template_directory_uri() . '/assets/img/descr-mobile.svg'?>" media="(max-width: 767px)">
            <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/descr-desktop.svg'?>" alt="Disclaimer" style="width: 100%; height: 100%; mix-blend-mode: multiply;">
        </picture>
    </div>
    <div class="footer-copyright-part">
        <p>PayDaySay<br>8 The Green, Suite #5876, Dover, DE 19901</p>
        <p>paydaysay.com © 2013-<?php echo currentYear(); ?></p>
    </div>
    <a href="#" class="scroll-to-top"><i class="fa fa-chevron-up"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/scroll-top-icon.svg'?>" alt="image description"></i></a>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php
wp_footer();
?>
</body>

</html>