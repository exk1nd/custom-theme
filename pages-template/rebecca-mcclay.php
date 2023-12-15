<?php
/* Template Name: Rebecca McClay
Template Post Type: post, page, cinema
*/
get_header();

?>
<main>
    <section class="container">
        <div class="author-head">
            <div class="team-ithem-container">
                <div class="team-ithem-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/Rebecca-McClay.png'?>">
                </div>
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Rebecca McClay</span>
                    
                    <p class="team-ithem-descr">Rebecca McClay has over 10 years of experience writing and editing finance and business content. She is a regular contributor to Investopedia and published in Bloomberg, The Wall Street Journal, TheStreet, MarketWatch, etc.</p>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/rmcclay" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/rebeccamcclay/" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                        <!--<a class="team-ithem-button" href="#"><img src="/img/fa.svg"></a>-->
                    </div>
                </div>
            </div>
            <div class="author-info">
                <span>Writer</span>
                <h2 class="author-info-title">Rebecca McClay</h2>
                <p>Writer/Journalist/Author</p>
            </div>
        </div>
        <div class="author-content-container">
            <div class="ithem-writers-news">
                <!--<img src="/img/1200px-CNN.svg">
                <img src="/img/NBC_News_2011.svg">
                <img src="/img/1200px-Global_News.svg">-->
                <img src="<?= get_template_directory_uri() . '/assets/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg'?>" width="44" height="26">
                <img src="<?= get_template_directory_uri() . '/assets/img/investopedia.svg'?>" width="48" height="48">
                <img src="<?= get_template_directory_uri() . '/assets/img/Bloomberg.png'?>" style="max-height: 30px;" width="30" height="30">
                <img src="<?= get_template_directory_uri() . '/assets/img/MarketWatch.png'?>" style="max-height: 35px;" width="75" height="35">
                <!--<img src="/img/TheStreet.png">-->
                
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>