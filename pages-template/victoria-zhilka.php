<?php
/* Template Name: Victoria Zhilka
Template Post Type: post, page, cinema
*/
get_header();

?>
<main>
    <style>
        .author-head{
            display: flex;
            background-image: linear-gradient(#084C8D 82%,#fff 82%);
            padding: 0 40px;
            margin-top: 30px;
        }
        .author-head .team-ithem-container{
            padding: 20px 0;
            margin-top: 40px;
            max-width: 260px;
            border: 1px solid #ccc;
        }
        .team-ithem-img{
            width: 90px;
            height: 90px;
            border-radius: 100%;
            overflow: hidden;
            margin: 0 auto;
        }
        .author-info{
            color: #fff;
            padding: 20px;
            margin-top: 40px;
        }
        .author-info-title{
            margin: 0;
            font-size: 40px;
        }
        .author-info p{
            font-size: 20px;
            margin: 10px 0;
        }
        .author-content-container{
            display: flex;
            flex-direction: column;
            margin: 30px 0;
        }
        .author-content-item{
            display: flex;
            align-items: flex-start;
            border-bottom: 1px solid #959595;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .author-content-item img{
            max-width: 200px;
            margin: 5px;
        }
        .author-content{
            padding: 0 20px;
        }
        .author-content p{
            margin: 5px 0;
        }
        .author-content-name{
            margin: 5px 0;
            font-size: 14px;
            font-weight: 700;
        }
        .author-content-title{
            margin: 10px 0;
            font-weight: 600;
            line-height: 1.3;
            font-size: 30px;
        }
        @media (max-width:700px) {
            .author-head{
                justify-content:center;
            }
            .author-info{
                display:none;
            }
            .author-content-item{
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }
    </style>
    <section class="container">
        <div class="author-head">
            <div class="team-ithem-container">
                <div class="team-ithem-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/team1.svg'?>">
                </div>
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Victoria Zhilka</span>
                    
                    <p class="team-ithem-descr">Creates and implements our mission, vision and goals. The ultimate decision-maker responsible for the overall company's success.</p>
                    <a class="team-ithem-button" href="https://www.linkedin.com/in/victoriazhilka/" target="_blank" style="margin-bottom: 0;"><img src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                </div>
            </div>
            <div class="author-info">
                <span>CEO</span>
                <h2 class="author-info-title">Victoria Zhilka</h2>
                <p>Personal finance writer</p>
            </div>
        </div>
        <div class="author-content-container">
            <div class="author-content-item">
                <img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/Speedy Cash.png'?>" alt="Speedy Cash" width="130" height="130">
                <div class="author-content">
                    <h4 class="author-content-name">Victoria Zhilka</h4>
                    <a href="/loans-like-speedy-cash/"><h2 class="author-content-title">Speedy Cash Alternatives [Sites & Places]</h2></a>
                    <p>What do you do when you need cash straight away? Tons of worries and insecurities make your head spinning, right?</p>
                    <p>Ease your financial stress and get assistance from loan places similar to Speedy Cash.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>