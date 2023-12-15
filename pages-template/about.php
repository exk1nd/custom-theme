<?php
/* Template Name: About
Template Post Type: post, page, cinema
*/
get_header();

?>

    <style>
        .team-writers-ithem-container {
            background: #FFFFFF;
            box-shadow: 0px 4px 24px rgba(0, 24, 71, 0.18);
            border-radius: 12px;
            max-width: 327px;
            padding-top: 30px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .ithem-writers-news {
            background: #F5F5F5;
            border-radius: 0px 0px 8px 8px;
            display: flex;
            padding: 10px 0;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            height: auto;
        }
    </style>
    <main>
        <section class="container about-content-head">
            <h1>About Us</h1>
            <p>Payday Say is a loan marketplace that was established in 2013 by a team of enthusiasts. A
                forward-thinking culture brought us where we are today. We help consumers fulfill their financial gaps
                with loans online in a transparent way.</p>
            <hr class="hr-green">
        </section>
        <section class="container team-block">
            <h3>Our Team</h3>
            <div class="team-ithem-container">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/team1.svg'?>">
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Victoria Zhilka</span>
                    <span class="team-ithem-prof">CEO</span>
                    <p class="team-ithem-descr">Creates and implements our mission, vision and goals. The ultimate
                        decision-maker responsible for the overall company's success.</p>
                    <a class="team-ithem-button" href="https://www.linkedin.com/in/victoriazhilka/" target="_blank"><img loading="lazy" decoding="async"
                                src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                </div>
            </div>
            <div class="team-ithem-container">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/team2.svg'?>">
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Irene Garbuz</span>
                    <span class="team-ithem-prof">Head of Marketing</span>
                    <p class="team-ithem-descr">Responsible for crafting marketing strategies and businesses
                        communications promoting the right message to maintain a company image.</p>
                    <a class="team-ithem-button" href="https://www.linkedin.com/in/irene-garbuz/" target="_blank"><img loading="lazy" decoding="async"
                                src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                </div>
            </div>
            <div class="team-ithem-container">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/team3.svg'?>">
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Kate Litvin</span>
                    <span class="team-ithem-prof">Designer</span>
                    <p class="team-ithem-descr">Executes the design and layout of our website. Creates engaging and
                        effective web pages that bring simplicity to complex roadblocks.</p>
                    <a class="team-ithem-button" href="https://www.linkedin.com/in/katherinelitvin/"
                       target="_blank"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                </div>
            </div>
            <div class="team-ithem-container">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/team4.svg'?>">
                <div class="team-ithem-text">
                    <span class="team-ithem-title">Olexandr Shelevalnyk</span>
                    <span class="team-ithem-prof">Web Developer</span>
                    <p class="team-ithem-descr">Writes efficient code by using best development practices. Maintains,
                        expands, scales and updates our website to meet modern web standards.</p>
                    <a class="team-ithem-button" href="https://www.linkedin.com/in/oleksandr-shelevalnyk-94824330/"
                       target="_blank"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                </div>
            </div>
        </section>
        <hr class="hr-green marg-60">
        <!--<a name="RebeccaMcClay"></a>-->
        <!--<a name="AllisonMartin"></a>-->
        <!--<a name="KathrynPomroy"></a>-->
        <section class="container team-block-writers">
            <h3>Our Writers</h3>
            <div class="team-writers-ithem-container">
                <div class="team-writers-img-container">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Rebecca-McClay.png'?>"></div>
                <div class="team-writers-ithem-text">
                    <span class="team-writers-ithem-title"><a name="RebeccaMcClay">Rebecca McClay</a></span>
                    <span class="team-writers-ithem-prof">Financial Writer, Editor</span>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/rmcclay" target="_blank"><img loading="lazy" decoding="async"
                                    src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/rebeccamcclay/"
                           target="_blank"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                        <!--<a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/fa.svg"></a>-->
                    </div>
                    <p class="team-writers-ithem-descr">Rebecca McClay has over 10 years of experience writing and
                        editing finance and business content. She is a regular contributor to Investopedia and published
                        in Bloomberg, The Wall Street Journal, TheStreet, MarketWatch, etc.</p>
                </div>
                <div class="ithem-writers-news">
                    <!--<img loading="lazy" decoding="async" src="/img/1200px-CNN.svg">
                    <img loading="lazy" decoding="async" src="/img/NBC_News_2011.svg">
                    <img loading="lazy" decoding="async" src="/img/1200px-Global_News.svg">-->
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets//img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg'?>" width="44" height="26">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/investopedia.svg'?>" width="48" height="48">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Bloomberg.png'?>" width="30" height="30" style="max-height: 30px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/MarketWatch.png'?>" width="75" height="35" style="max-height: 35px;">
                    <!--<img loading="lazy" decoding="async" src="/img/TheStreet.png">-->

                </div>
            </div>
            <div class="team-writers-ithem-container">
                <div class="team-writers-img-container">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Allison-Martin.png'?>"></div>
                <div class="team-writers-ithem-text">
                    <span class="team-writers-ithem-title"><a name="AllisonMartin">Allison Martin</a></span>
                    <span class="team-writers-ithem-prof">Financial Educator and Writer</span>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/amfincoach" target="_blank"><img loading="lazy" decoding="async"
                                    src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/allison-e-martin-cfei-549a7851/"
                           target="_blank"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                        <!--<a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/fa.svg"></a>-->
                    </div>
                    <p class="team-writers-ithem-descr">Allison E. Martin is a Certified Financial Education Instructor
                        (CFEI) who has written articles for many reputable publications like The Wall Street Journal,
                        Investopedia, MoneyTalksNews, ABC News, MSN Money, Yahoo!Finance and Fox Business.</p>
                </div>
                <div class="ithem-writers-news">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/investopedia.svg'?>">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/abcnews_pearl_stacked.svg'?>">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/moneytalknews.png'?>" style="max-height: 35px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg'?>">
                </div>
            </div>
            <div class="team-writers-ithem-container">
                <div class="team-writers-img-container">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Kathryn-Pomroy.jpg'?>"></div>
                <div class="team-writers-ithem-text">
                    <span class="team-writers-ithem-title"><a name="KathrynPomroy">Kathryn Pomroy</a></span>
                    <span class="team-writers-ithem-prof">Journalist/Writer/Editor</span>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/katecarr55" target="_blank"><img loading="lazy" decoding="async"
                                    src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/upnorthwriter/"
                           target="_blank"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                        <!--<a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/fa.svg"></a>-->
                    </div>
                    <p class="team-writers-ithem-descr">Kathryn Pomroy holds a BA in journalism. She has written for
                        dozens of major publications and financial companies, including Intuit/Quickbooks, Money
                        Crashers, NextAdvisor/Time and FOX Business.</p>
                </div>
                <div class="ithem-writers-news">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/FoxBusiness.png'?>" style="max-height: 30px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/1024px-Time_Magazine_logo.svg.png'?>" style="max-height: 30px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/moneycrashers.png'?>">
                    <!--<img loading="lazy" decoding="async" src="/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg">-->
                </div>
            </div>

            <!--<div class="team-writers-ithem-container">
                <div class="team-writers-img-container">
                    <img loading="lazy" decoding="async" src="/img/Ellipse 1(4).svg"></div>
                <div class="team-writers-ithem-text">
                    <span class="team-writers-ithem-title">Antony Smith</span>
                    <span class="team-writers-ithem-prof">freelance writer</span>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/tw.svg"></a>
                        <a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/in.svg"></a>
                        <a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/fa.svg"></a>
                    </div>
                    <p class="team-writers-ithem-descr" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
                </div>
                <div class="ithem-writers-news">
                    <img loading="lazy" decoding="async" src="/img/1200px-CNN.svg">
                    <img loading="lazy" decoding="async" src="/img/NBC_News_2011.svg">
                    <img loading="lazy" decoding="async" src="/img/1200px-Global_News.svg">
                    <img loading="lazy" decoding="async" src="/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg">
                </div>
            </div>-->
            <div class="team-writers-ithem-container">
                <div class="team-writers-img-container">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Erica-Sandberg.jpg'?>"></div>
                <div class="team-writers-ithem-text">
                    <span class="team-writers-ithem-title">Erica Sandberg</span>
                    <span class="team-writers-ithem-prof">Writer/Journalist/Author</span>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/EricaJSandberg" target="_blank"><img loading="lazy" decoding="async"
                                    src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/erica-sandberg-65b40a2/"
                           target="_blank"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                        <!--<a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/fa.svg"></a>-->
                    </div>
                    <p class="team-writers-ithem-descr">Erica Sandberg is an and author of "Expecting Money: The
                        Essential Financial Plan for New and Growing Families." Erica is on the advisory committee for
                        Project Money and a member of the Society of American Business Editors and Writers.</p>
                </div>
                <div class="ithem-writers-news">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/1200px-CNN.svg'?>">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/FoxBusiness.png'?>" style="max-height: 30px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/MarketWatch.png'?>" width="75" height="35" style="max-height: 35px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/155-1550175_wall-street-journal-logo-png-wsj-logo-transparent.svg'?>">
                </div>
            </div>
            <div class="team-writers-ithem-container">
                <div class="team-writers-img-container">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Eric-Bank.jpeg'?>"></div>
                <div class="team-writers-ithem-text">
                    <span class="team-writers-ithem-title">Eric Bank</span>
                    <span class="team-writers-ithem-prof">Writer/Journalist/Author</span>
                    <div class="team-writers-social">
                        <a class="team-ithem-button" href="https://twitter.com/eebers444"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/tw.svg'?>"></a>
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/ericbank/"><img loading="lazy" decoding="async"
                                    src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                    </div>
                    <p class="team-writers-ithem-descr">Eric Bank is an experienced professional writer. He is a
                        personal finance expert. You may recognize him from the many articles he’s written on a number
                        of popular websites. Eric has an M.S. in finance from DePaul University and an MBA from New York
                        University.</p>
                </div>
                <div class="ithem-writers-news">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/chron.png'?>" style="mix-blend-mode: multiply;max-height: 35px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/the-nest.png'?>" style="mix-blend-mode: darken;max-height: 40px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/zacks.png'?>" style="mix-blend-mode: multiply;max-height: 36px;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/wisebread.png'?>" style="mix-blend-mode: multiply;max-height: 40px;">
                </div>
            </div>
            <div class="team-writers-ithem-container">
                <div class="team-writers-img-container">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/DanPelberg.jpg'?>"></div>
                <div class="team-writers-ithem-text">
                    <span class="team-writers-ithem-title">Dan Pelberg</span>
                    <span class="team-writers-ithem-prof">Writer/Journalist/Author</span>
                    <div class="team-writers-social">
                        <!--<a class="team-ithem-button" href="#" target="_blank"><img loading="lazy" decoding="async" src="/img/tw.svg"></a>-->
                        <a class="team-ithem-button" href="https://www.linkedin.com/in/dpelberg/" target="_blank"><img loading="lazy" decoding="async"
                                    src="<?= get_template_directory_uri() . '/assets/img/in.svg'?>"></a>
                        <!--<a class="team-ithem-button" href="#"><img loading="lazy" decoding="async" src="/img/fa.svg"></a>-->
                    </div>
                    <p class="team-writers-ithem-descr">Dan Pelberg is a financial writer who has worked with a wide
                        range of financial planners, wealth managers, Fortune 500 companies, startups, and more. His
                        work has been featured in Yahoo Finance, The Motley Fool, Business Insider, Investopedia, and
                        other financial outlets.</p>
                </div>
                <div class="ithem-writers-news">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/The-Motley-Fool.svg'?>" style="max-width: 60px;mix-blend-mode: multiply;">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Yahoo!_Finance.svg'?>" style="max-width: 85px;">
                    <img loading="lazy" decoding="async" style="max-height: 35px;" src="<?= get_template_directory_uri() . '/assets/img/BI_blue_background_vertical.png'?>" width="75" height="35">
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Investopedia.png'?>" style="mix-blend-mode: multiply;">
                </div>
            </div>
        </section>
        <hr class="hr-green marg-60">
        <section class="container reviews-block">
            <h3>Payday Say Reviews</h3>
            <div class="reviews-container">
                <div class="reviews-ithem">
                    <div class="reviews-ithem-rating">4/5</div>
                    <div class="reviews-ithem-rating-icon">
                        <span class="star-g1"></span>
                        <span class="star-g1"></span>
                        <span class="star-g1"></span>
                        <span class="star-g1"></span>
                        <span class="star-g2"></span>
                    </div>
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/trustpilot-logo.svg'?>" width="143" height="35">
                </div>
                <div class="reviews-ithem">
                    <div class="reviews-ithem-rating">4,6/5</div>
                    <div class="reviews-ithem-rating-icon">
                        <span class="star-o1"></span>
                        <span class="star-o1"></span>
                        <span class="star-o1"></span>
                        <span class="star-o1"></span>
                        <span class="star-o2"></span>
                    </div>
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/sitejabber-logo.svg'?>" width="178" height="33">
                </div>
                <div class="reviews-ithem">
                    <div class="reviews-ithem-rating">5/5</div>
                    <div class="reviews-ithem-rating-icon">
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/best-company-logo.svg'?>" width="206" height="37">
                </div>
            </div>
            <div>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="user-reviews-container">
                            <div class="user-reviews-avatar-col">
                                <div class="user-reviews-avatar-img"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Tim-Dottin.png'?>"
                                                                          style="width: 100%;"></div>
                                <span class="user-reviews-avatar-name">Tim Dottin</span>
                                <span class="user-reviews-avatar-date">Nov 26, 2019</span>
                            </div>
                            <div class="user-reviews-descr-col">
                                <div class="user-reviews-descr-top">
                                    <div class="user-reviews-rating">
                                        <span class="star-g1"></span>
                                        <span class="star-g1"></span>
                                        <span class="star-g1"></span>
                                        <span class="star-g1"></span>
                                        <span class="star-g1"></span>
                                    </div>
                                    <!--<span class="user-reviews-verified">Verified order</span>-->
                                </div>
                                <span class="user-reviews-descr-title">
                            My very first experience
                        </span>
                                <p class="user-reviews-descr">
                                    My very first experience with Payday Say was awesome! I was pleased to get my loan
                                    approved so soon right after I sent a request. Honestly, I never used an online loan
                                    before because of fraud situations and a big fear to lose my data. You can relax
                                    when Payday Say is working! They’re completely adaptable and deal with different
                                    kinds of situations. Being a graduate student, I can easily control my finances and
                                    get additional money whenever I want. Worth a try, I would recommend applying, if
                                    you need some cash with minimal paperwork and stress.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mySlides fade">
                        <div class="user-reviews-container">
                            <div class="user-reviews-avatar-col">
                                <div class="user-reviews-avatar-img"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/Max V..png'?>" style="width: 100%;">
                                </div>
                                <span class="user-reviews-avatar-name">Max V.</span>
                                <span class="user-reviews-avatar-date">Feb 27th, 2020</span>
                            </div>
                            <div class="user-reviews-descr-col">
                                <div class="user-reviews-descr-top">
                                    <div class="user-reviews-rating">
                                        <span class="star-o1"></span>
                                        <span class="star-o1"></span>
                                        <span class="star-o1"></span>
                                        <span class="star-o1"></span>
                                        <span class="star-o1"></span>
                                    </div>
                                    <!--<span class="user-reviews-verified">Verified order</span>-->
                                </div>
                                <span class="user-reviews-descr-title">
                             "They saved my journey!"
                        </span>
                                <p class="user-reviews-descr">
                                    My last journey was about to collapse. With my wife, we were in another state with
                                    no money in pockets because of a thief. It was the worse situation in my life, but
                                    my wife proposed to apply for a loan. We scour some forums and found a lot of good
                                    reviews about Payday Say. So... obvious choice. Fast approval and instant money are
                                    about this company!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mySlides fade">
                        <div class="user-reviews-container">
                            <div class="user-reviews-avatar-col">
                                <div class="user-reviews-avatar-img"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/author.svg'?>"></div>
                                <span class="user-reviews-avatar-name">ArrivaSummer</span>
                                <span class="user-reviews-avatar-date">Feb 28th, 2019</span>
                            </div>
                            <div class="user-reviews-descr-col">
                                <div class="user-reviews-descr-top">
                                    <div class="user-reviews-rating">
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                        <span class="star"></span>
                                    </div>
                                    <!--<span class="user-reviews-verified">Verified order</span>-->
                                </div>
                                <span class="user-reviews-descr-title">
                            Thanks Payday Say...
                        </span>
                                <p class="user-reviews-descr">
                                    Thanks Payday Say for helping us with the realization of our dreams. We needed money
                                    to make a small film. We are ordinary students. Where can we find the money to rent
                                    equipment? And we did not want to shoot on a budget camera. We did not expect, that
                                    so many creditors will respond to our application. Therefore, we decided that it is
                                    better to buy a camera and a powerful computer for more professional work with video
                                    editing. We also bought licenses for a couple of video editing programs. After all,
                                    we are not going to stop at one project. We will return the money with scholarships
                                    because if the money will come in parts, we will not save up for the equipment. So
                                    in our case, the loan without additional conditions is the best way for our
                                    situation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Next and previous buttons -->
                    <div class="prev-h" onclick="plusSlides(-1)"><a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    </div>
                    <div class="next-h" onclick="plusSlides(1)"><a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    // Next/previous controls
                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    // Thumbnail image controls
                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                    }
                </script>
            </div>
            <div class="logo-reviews">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/bbb.svg'?>" width="165" height="70">
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/dandb.svg'?>" width="263" height="70">
            </div>
        </section>
        <section id="benefits-block">
            <div class="benefits-container">
                <div class="benefits-container-service">
                    <span class="benefits-container-icon"><img loading="lazy" decoding="async" loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/service-12n.svg'?>" alt="fast cash"
                                                               width="90" height="90"></span>
                    <h5>Fast access to money</h5>
                </div>
                <div class="benefits-container-service">
                    <span class="benefits-container-icon"><img loading="lazy" decoding="async" loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/service-8n.svg'?>"
                                                               alt="easy borrowing" width="90" height="90"></span>
                    <h5>Easy and secure form</h5>
                </div>
                <div class="benefits-container-service">
                    <span class="benefits-container-icon"><img loading="lazy" decoding="async" loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/service-3n.svg'?>"
                                                               alt="quick approval" width="90" height="90"></span>
                    <h5>Quick Decision</h5>
                </div>
                <div class="benefits-container-service">
                    <span class="benefits-container-icon"><img loading="lazy" decoding="async" loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/service-9n.svg'?>"
                                                               alt="best lenders" width="90" height="90"></span>
                    <h5>Check your loan offer</h5>
                </div>
                <div class="benefits-container-service">
                    <span class="benefits-container-icon"><img loading="lazy" decoding="async" loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/service-5n.svg'?>"
                                                               alt="direct money transfer" width="90"
                                                               height="90"></span>
                    <h5>Electronic money transfer</h5>
                </div>
                <div class="benefits-container-service">
                    <span class="benefits-container-icon"><img loading="lazy" decoding="async" loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/service-4n.svg'?>"
                                                               alt="lenders online" width="90" height="90"></span>
                    <h5>Loan connection service</h5>
                </div>
            </div>
        </section>
        <sectoin class="container about-content-block">
            <h3>Financial Literacy</h3>
            <p>Improving financial literacy among our customers is important to us. Our role is to provide you with as
                much information as we can to help you make the right choice! Our blog aims to present useful tips,
                guides, reviews, etc. Questions and Answers section will help you to learn more about common financial
                products. Financial resources disclose finance-related terms, success stories, interviews, etc. Make
                better money decisions with PayDaySay.com!</p>
            <p>Keep in mind that Payday Say doesn’t lend money. Our online application form serves as a mediator between
                you and one of the direct lenders we are partnered with. This means that we can’t provide any exact
                information on the loan amounts, interest rates or any other terms you can qualify for. It’s only the
                lender (you are connected with) who can answer all your loan-related questions.</p>
            <p>So, why to use our site instead of applying to a direct lender? And here goes the answer. When you file
                your loan request via our form, your application can be assessed by a wide network of lenders. Thus, you
                get much more chances to get approved!</p>
            <p style="text-align: center; font-weight: bold; font-size: 16px;">We put our customers first and have your
                most important needs and concerns in mind.</p>
            <p>We want to help you take care of your financial needs before they turn into bigger problems. Emergencies
                do come up, but they don't have to be as devastating as they might seem. Traditional lenders often have
                strict requirements for lending money and loan request processes, but our lenders can work with a
                variety of situations, and the process is much simpler and easier to navigate.</p>
            <p>Our loan referral service just may be the answer to the financial difficulties you are now experiencing.
                Start the process today and see where we can take you!</p>
            <h3>Our Social Media</h3>
            <div class="social-container">
                <hr class="hr-grey">
                <p class="social-container-ithem"><a href="#"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/b-icon-Facebook.svg'?>"
                                                                   alt="Payday Say company" width="70" height="70"
                                                                   align="left"></a>If you’re feeling comfortable
                    surfing through Facebook, our page would be a perfect place to keep you fully updated with the
                    latest articles from Payday Say blog, as well as other important news from the current financial
                    world. Follow our page!</p>
                <hr class="hr-green">
                <p class="social-container-ithem"><a href="#"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/b-icon-Twitter.svg'?>" alt="Payday Say loans"
                                                                   width="70" height="70" align="left"></a>Twitter feed
                    is very convenient for those who want to get information instantly. News, articles, helpful retweets
                    are perfect for exploring new financial strategies about business or budget management. Join us on
                    Twitter!</p>
                <hr class="hr-grey">
                <p class="social-container-ithem"><a href="#"><img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/b-icon-Linkedin.svg'?>"
                                                                   alt="about loan company" width="70" height="70"
                                                                   align="left"></a>LinkedIn is absolutely a must-have
                    in 2019 as it contributes to expanding professional networking. So, here we are! Find some time to
                    check our company’s page for news and updates. And feel free to join the group!</p>
                <hr class="hr-green">
            </div>
            <p style="font-size: 18px; text-align: center;">
                <strong><em>Stay in touch and you will always be the first to know about new financial services and
                        other Company's news.</em>
                </strong>
            </p>
        </sectoin>
    </main>

<?php get_footer(); ?>