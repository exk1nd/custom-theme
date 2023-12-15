<?php
/* Template Name: Kathryn Pomroy
Template Post Type: post, page, cinema
*/
get_header();

?>
<main>
    <section class="container">
        <div class="author-head">
            <div class="team-ithem-container">
                <div class="team-ithem-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/Kathryn-Pomroy.jpg'?>">
                </div>
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Kathryn Pomroy</span>
                    
                    <p class="team-ithem-descr">Kathryn Pomroy holds a BA in journalism. She has written for dozens of major publications and financial companies, including Intuit/Quickbooks, Money Crashers, NextAdvisor/Time and FOX Business.</p>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/katecarr55" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/upnorthwriter/" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                        <!--<a class="team-ithem-button" href="#"><img src="/img/fa.svg"></a>-->
                    </div>
                </div>
            </div>
            <div class="author-info">
                <span>Writer</span>
                <h2 class="author-info-title">Kathryn Pomroy</h2>
                <p>Writer/Journalist/Author</p>
            </div>
        </div>
        <div class="author-content-container">
            <div class="ithem-writers-news">
                <img src="<?= get_template_directory_uri() . '/assets/img/FoxBusiness.png'?>" style="max-height: 30px;">
                <img src="<?= get_template_directory_uri() . '/assets/img/1024px-Time_Magazine_logo.svg.png'?>" style="max-height: 30px;">
                <img src="<?= get_template_directory_uri() . '/assets/img/moneycrashers.png'?>">
                <!--<img src="/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg">-->
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>