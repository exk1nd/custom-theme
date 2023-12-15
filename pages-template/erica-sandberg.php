<?php
/* Template Name: Erica Sandberg
Template Post Type: post, page, cinema
*/
get_header();

?>
<main>
    <section class="container">
        <div class="author-head">
            <div class="team-ithem-container">
                <div class="team-ithem-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/Erica-Sandberg.jpg'?>">
                </div>
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Erica Sandberg</span>
                    
                    <p class="team-ithem-descr">Erica Sandberg is an and author of "Expecting Money: The Essential Financial Plan for New and Growing Families." Erica is on the advisory committee for Project Money and a member of the Society of American Business Editors and Writers.</p>
                    <div class="team-writers-social">
                    <a class="team-ithem-button" href="https://twitter.com/EricaJSandberg" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                    <a class="team-ithem-button" href="https://www.linkedin.com/in/erica-sandberg-65b40a2/" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                </div>
                </div>
            </div>
            <div class="author-info">
                <span>Writer</span>
                <h2 class="author-info-title">Erica Sandberg</h2>
                <p>Writer/Journalist/Author</p>
            </div>
        </div>
        <div class="author-content-container">
            <div class="ithem-writers-news">
                <img src="<?= get_template_directory_uri() . '/assets/img/1200px-CNN.svg'?>">
                <img src="<?= get_template_directory_uri() . '/assets/img/FoxBusiness.png'?>" style="max-height: 30px;">
                <img src="<?= get_template_directory_uri() . '/assets/img/MarketWatch.png'?>" style="max-height: 35px;" width="75" height="35">
                <img src="<?= get_template_directory_uri() . '/assets/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg'?>">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>