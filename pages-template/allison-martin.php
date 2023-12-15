<?php
/* Template Name: Allison Martin
Template Post Type: post, page, cinema
*/
get_header();

?>
<main>
    <section class="container">
        <div class="author-head">
            <div class="team-ithem-container">
                <div class="team-ithem-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/Allison-Martin.png'?>">
                </div>
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Allison Martin</span>
                    
                    <p class="team-ithem-descr">Allison E. Martin is a Certified Financial Education Instructor (CFEI) who has written articles for many reputable publications like The Wall Street Journal, Investopedia, MoneyTalksNews, ABC News, MSN Money, Yahoo!Finance and Fox Business.</p>
                    <div class="team-writers-social">
                    <a class="team-ithem-button" href="https://twitter.com/amfincoach" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                    <a class="team-ithem-button" href="https://www.linkedin.com/in/allison-e-martin-cfei-549a7851/" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                </div>
                </div>
            </div>
            <div class="author-info">
                <span>Writer</span>
                <h2 class="author-info-title">Allison Martin</h2>
                <p>Financial Educator and Writer</p>
            </div>
        </div>
        <div class="author-content-container">
            <div class="ithem-writers-news">
                <img src="<?= get_template_directory_uri() . '/assets/img/investopedia.svg'?>">
                <img src="<?= get_template_directory_uri() . '/assets/img/abcnews_pearl_stacked.svg'?>">
                <img src="<?= get_template_directory_uri() . '/assets/img/moneytalknews.png'?>" style="max-height: 35px;">
                <img src="<?= get_template_directory_uri() . '/assets/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg'?>">
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>