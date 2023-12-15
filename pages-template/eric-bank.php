<?php
/* Template Name: Eric Bank
Template Post Type: post, page, cinema
*/
get_header();

?>
<main>
    <section class="container">
        <div class="author-head">
            <div class="team-ithem-container">
                <div class="team-ithem-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/Eric-Bank.jpeg'?>">
                </div>
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Eric Bank</span>
                    
                    <p class="team-ithem-descr">Eric Bank is an experienced professional writer. He is a personal finance expert. You may recognize him from the many articles he’s written on a number of popular websites. Eric has an M.S. in finance from DePaul University and an MBA from New York University.</p>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/eebers444"><img src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/ericbank/"><img src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                    </div>
                </div>
            </div>
            <div class="author-info">
                <span>Writer</span>
                <h2 class="author-info-title">Eric Bank</h2>
                <p>Writer/Journalist/Author</p>
            </div>
        </div>
        <div class="author-content-container">
            <div class="ithem-writers-news">
                <img src="<?= get_template_directory_uri() . '/assets/img/chron.png'?>" style="mix-blend-mode: multiply;max-height: 35px;">
                <img src="<?= get_template_directory_uri() . '/assets/img/the-nest.png'?>" style="mix-blend-mode: darken;max-height: 40px;">
                <img src="<?= get_template_directory_uri() . '/assets/img/zacks.png'?>" style="mix-blend-mode: multiply;max-height: 36px;">
                <img src="<?= get_template_directory_uri() . '/assets/img/wisebread.png'?>" style="mix-blend-mode: multiply;max-height: 40px;">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>