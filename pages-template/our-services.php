<?php
/* Template Name: our-services
Template Post Type: post, page, cinema
*/
get_header();

?>

    <main>

        <section id="tableblock">
            <div class="table-description" itemprop="mainContentOfPage">
                <h1>Our Services</h1>
                <div class="our-serv-box">
                    <div class="sericec-baner-box">
                        <figure>
                            <a href="/goto/application-form">
                                <img alt="personal loans" class="img-responsive lazyloaded"
                                     src="<?= get_template_directory_uri() . '/assets/img/personal_loans_new.jpg'?>"
                                     loading="lazy" width="350" height="230">
                                <span>
                  <h2 class="clr-orange fw-medium text-uppercase">personal<br>loans</h2>
                  <div class="apply-btn"><strong>apply now</strong></div>
                </span>
                            </a>
                        </figure>
                    </div>
                    <div class="sericec-baner-box">
                        <figure>
                            <a href="/goto/application-form">
                                <img alt="business loans" class="img-responsive lazyloaded"
                                     src="<?= get_template_directory_uri() . '/assets/img/business_loans_new.jpg'?>"
                                     loading="lazy" width="350" height="230">
                                <span>
                  <h2 class="clr-orange fw-medium text-uppercase">business<br>loans</h2>
                  <div class="apply-btn"><strong>apply now</strong></div>
                </span>
                            </a>
                        </figure>
                    </div>
                    <div class="sericec-baner-box">
                        <figure>
                            <a href="/goto/application-form">
                                <img alt="debt consolidation" class="img-responsive lazyloaded"
                                     src="<?= get_template_directory_uri() . '/assets/img/dept_consolidation_new.jpg'?>"
                                     loading="lazy" width="350" height="230">
                                <span>
                  <div class="apply-btn"><strong>apply now</strong></div>
                  <h2 class="clr-orange fw-medium text-uppercase">debt<br>consolidation</h2>
                </span>
                            </a>
                        </figure>
                    </div>
                    <div class="sericec-baner-box">
                        <figure>
                            <a href="/goto/application-form">
                                <img alt="mortgage loans" class="img-responsive lazyloaded"
                                     src="<?= get_template_directory_uri() . '/assets/img/short_term_loans_new.jpg'?>"
                                     loading="lazy" width="350" height="230">
                                <span>
                  <h2 class="clr-orange fw-medium text-uppercase">short term<br>loans</h2>
                  <div class="apply-btn"><strong>apply now</strong></div>
                </span>
                            </a>
                        </figure>
                    </div>
                </div>
                <h2>We Always Offer More</h2>
                <p>Here you can get an easy access to our main categories. Each category has at least a few options. We
                    have various small online loans, different kinds of mortgages. If you own a small business, it will
                    be useful for you to check our online options for funding small businesses. In case you struggle
                    from debts, click on a debt consolidation banner.</p>
                <p>We work with people who have various credit scores. We even have personal loans for bad credit and
                    unsecured business loans. Just make sure to meet the loan criteria. To learn more about our loans,
                    read how we work here. We do our best to help all the consumers to find <strong>financial freedom
                        through PayDaySay.</strong></p>
            </div>
        </section>
    </main>
<?php get_footer(); ?>