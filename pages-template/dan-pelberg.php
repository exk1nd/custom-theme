<?php
/* Template Name: Dan Pelberg
Template Post Type: post, page, cinema
*/
get_header();

?>
<main>
    <section class="container">
        <div class="author-head">
            <div class="team-ithem-container">
                <div class="team-ithem-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/DanPelberg.jpg'?>">
                </div>
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Dan Pelberg</span>
                    
                    <p class="team-ithem-descr">Dan Pelberg is a financial writer who has worked with a wide range of financial planners, wealth managers, Fortune 500 companies, startups, and more. His work has been featured in Yahoo Finance, The Motley Fool, Business Insider, Investopedia, and other financial outlets.</p>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/dpelberg/" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                    </div>
                </div>
            </div>
            <div class="author-info">
                <span>Writer</span>
                <h2 class="author-info-title">Dan Pelberg</h2>
                <p>Writer/Journalist/Author</p>
            </div>
        </div>
        <div class="author-content-container">
            <div class="ithem-writers-news">
                <img src="<?= get_template_directory_uri() . '/assets/img/The-Motley-Fool.png'?>" style="max-width: 60px;mix-blend-mode: multiply;">
                <img src="<?= get_template_directory_uri() . '/assets/img/Yahoo!_Finance.svg'?>" style="max-width: 85px;">
                <img style="max-height: 35px;" src="<?= get_template_directory_uri() . '/assets/img/BI_blue_background_vertical.png'?>" width="75" height="35">
                <img src="<?= get_template_directory_uri() . '/assets/img/Investopedia.png'?>" style="mix-blend-mode: multiply;">
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>