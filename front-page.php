<?php
/* Template Name: Home Page
Template Post Type: page
*/
get_header();
?>

    <main class="home-page">

        <?= get_template_part( 'part-templates/home-banner' ); ?>
        <section class="what-we-provide" data-anim-item>
            <h3 class="section-title">Our Expertise</h3>
            <div class="container-my">
                <div class="grid-container-my-1">
                    <div class="item">
                        <a class="content" href="/personal-loans/">
                            <img loading="lazy" decoding="async" class="item-img" src="/wp-content/themes/paydaysay/assets/img/personal.png" alt="Personal Loans" width="48" height="48">
                            <h4 class="item-title">Personal Loans</h4>
                            <p class="text">Get the funds you need quickly and securely with a personal loan.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="content" href="/installment-loans/">
                            <img loading="lazy" decoding="async" class="item-img" src="/wp-content/themes/paydaysay/assets/img/bank.png" alt="Installment Loans" width="48" height="48">
                            <h4 class="item-title">Installment Loans</h4>
                            <p class="text">Get flexible loan with repayment terms to control your finances.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="content" href="/emergency-loans/">
                            <img loading="lazy" decoding="async" class="item-img" src="/wp-content/themes/paydaysay/assets/img/investment.png" alt="Emergency Loans" width="48" height="48">
                            <h4 class="item-title">Emergency Loans</h4>
                            <p class="text">Access emergency cash for unexpected bills - stay on top of your finances.</p>
                        </a>
                    </div>
                    <div class="item">
                        <a class="content" href="/debt-consolidation-loans/">
                            <img loading="lazy" decoding="async" class="item-img" src="/wp-content/themes/paydaysay/assets/img/financial-statement.png" alt="Debt Consolidation" width="48" height="48">
                            <h4 class="item-title">Debt Consolidation</h4>
                            <p class="text">Stop juggling multiple payments and get better financial organization.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="app-for-you-section" data-anim-item>
            <div class="container-my">

                <div class="grid-container-my">
                    <div class="item-left">
                        <div class="item-inner">
                            <div class="grid-container-my-2">
                                <div class="item-text">
                                    <div class="text-content">
                                        <h3 class="section-title">App <br>For You</h3>
                                    </div>
                                </div>
                                <div class="item-text">
                                    <div class="text-content">
                                        <h4 class="sm-title">Instant cash</h4>
                                        <p class="sub-title">Get Money Just in a Few Clicks</p>
                                        <p class="text">No more waiting in long lines or filling out paperwork</p>
                                    </div>
                                </div>
                                <div class="item-text">
                                    <div class="text-content">
                                        <h4 class="sm-title">Protected data</h4>
                                        <p class="sub-title">Customer Info<br> Safe and Secure</p>
                                        <p class="text">Your private information will never be disclosed.</p>
                                    </div>
                                </div>
                                <div class="item-text">
                                    <div class="text-content">
                                        <h4 class="sm-title">Fast approval</h4>
                                        <p class="sub-title">Get Funded on the Next Business Day</p>
                                        <p class="text">Receive your funds quickly and efficiently</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-right">
                        <div class="img-block">
                            <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/appforyou.png" alt="payday advance app" width="949" height="906">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="borrow-money" data-anim-item>
            <div class="container-my">
                <div class="grid-container-my">
                    <div class="item-left">
                        <div class="img-block">
                            <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/borrowmoney.png" alt="Borrow Money" width="971" height="976">
                        </div>
                    </div>
                    <div class="item-right">
                        <div class="item-content">
                            <h3 class="section-title">How Much You Can Borrow</h3>
                            <p class="text">Usually, cash advance apps that loan money provide an opportunity to obtain a decent amount of additional funds. Using the PayDaySay app, you may get from $100 to $5,000 </p>
                            <p class="text last-text">Personal loans are issued to the applicants with any credit score, while the funds can be utilized for a variety of needs and purposes. It’s easy to get approved for a sum up to $5,000 depending on your current financial aims.</p>
                        </div>
                    </div>
                </div>
                <div class="btn-block">
                    <a class="btn download-app-btn" href="#" onclick="redirectToApp()">Download app</a>
                </div>
                <script>
                    function redirectToApp() {
                        const userAgent = navigator.userAgent.toLowerCase();
                        if (/iphone|ipod/.test(userAgent)) {
                            window.location.href = 'https://apps.apple.com/us/app/payday-advance-borrow-money/id1542349316';
                        }
                        else if (/android/.test(userAgent)) {
                            window.location.href = 'https://play.google.com/store/apps/details?id=com.payday.advance.money.loan&hl=en_US&gl=US';
                        }
                        else {
                            window.location.href = 'https://apps.apple.com/us/app/payday-advance-borrow-money/id1542349316';
                        }
                    }
                </script>
            </div>
        </section>

        <section class="benefits" data-anim-item>
            <div class="container-my">
                <h3 class="section-title">Benefits</h3>
                <div class="sub-title-block">
                    <p class="text">Among the best payday advance apps, PayDaySay app allows consumers to meet their near-term financial goals without too much effort and obtain loans. There are many advantages of turning to this cash app:</p>
                </div>
                <div class="grid-container-my">
                    <div class="item-left">
                        <div class="img-block">
                            <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/benefits.png" alt="Benefits" width="966" height="735">
                        </div>
                    </div>
                    <div class="item-right">
                        <div class="item-inner">
                            <div class="text-content">
                                <div class="text-content-inner">
                                    <div class="item-title">
                                        <img class="title-img" src="/wp-content/themes/paydaysay/assets/img/investment.png" alt="Benefit 1" width="48" height="48">
                                        <h4 class="title">Speed</h4>
                                    </div>
                                    <p class="text">Top our priority: Get quick loans from your smartphone anytime, anywhere. No travel needed.</p>
                                </div>
                            </div>
                            <div class="text-content">
                                <div class="text-content-inner">
                                    <div class="item-title">
                                        <img class="title-img" src="/wp-content/themes/paydaysay/assets/img/ben2.png" alt="Benefit 2" width="48" height="48">
                                        <h4 class="title">Money 24/7</h4>
                                    </div>
                                    <p class="text">Get fast cash for a small fee with your smartphone and bank account submission.</p>
                                </div>
                            </div>
                            <div class="text-content">
                                <div class="text-content-inner">
                                    <div class="item-title">
                                        <img class="title-img" src="/wp-content/themes/paydaysay/assets/img/ben3.png" alt="Benefit 3" width="48" height="48">
                                        <h4 class="title">Security</h4>
                                    </div>
                                    <p class="text">We value each consumer and want to protect your privacy. Private information of the borrowers will never be disclosed. </p>
                                </div>
                            </div>
                            <div class="text-content">
                                <div class="text-content-inner">
                                    <div class="item-title">
                                        <img class="title-img" src="/wp-content/themes/paydaysay/assets/img/ben4.png" alt="Benefit 4" width="48" height="48">
                                        <h4 class="title">No paperwork</h4>
                                    </div>
                                    <p class="text">No paperwork needed. Quick cash app borrow feature for all across the country. No prepaid or hidden penalties.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-on" data-anim-item>
            <div class="container-my">
                <h2 class="section-title">Featured on</h2>
                <div class="row-my flex-container-my">
                    <div class="item">
                        <img loading="lazy" decoding="async" class="company-logo-img"src="/wp-content/themes/paydaysay/assets/img/business-insider-hover.png" alt="Business Insider" width="92.52">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="company-logo-img"src="/wp-content/themes/paydaysay/assets/img/yahoo-hover.png" alt="Yahoo!" width="109.61" height="30.52">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="company-logo-img"src="/wp-content/themes/paydaysay/assets/img/forbes-hover.png" alt="Forbes" width="98.21" height="24.61">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="company-logo-img"src="/wp-content/themes/paydaysay/assets/img/lifehack-hover.png" alt="Lifehack" width="127" height="25.92">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="company-logo-img"src="/wp-content/themes/paydaysay/assets/img/new-york-times-hover.png" alt="The New York Times" width="208" height="36.01">
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </section>

        <section class="get-started" data-anim-item>
            <div class="section-background"></div>
            <div class="container-my">
                <div class="content">
                    <h3 class="title">It Takes Less Than 5 Min</h3>
                    <p class="text">We will try to connect you with a direct lender no matter what your credit score is.</p>
                    <div class="row-my flex-container-my">
                        <div class="item">
                            <div class="dropdown-select">
                                <div class="active-select">
                                    <span class="selected-option">Choose Loans</span>
                                    <img loading="lazy" decoding="async" class="arrow-img" src="/wp-content/themes/paydaysay/assets/img/select-arrow.svg" alt="arrow" width="16" height="16">
                                </div>
                                <div class="options">
                                    <div class="option-item"><span class="option">$100 - $1.000</span></div>
                                    <div class="option-item"><span class="option">$2000 - $5.000</span></div>
                                    <div class="option-item"><span class="option">$5000 - $10.000</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-block">
                            <button class="btn get-started-btn">Get started</button>
                        </div>
                    </div>
                    <div class="row-my">
                        <div class="items">
                            <div class="item1">
                                <img loading="lazy" decoding="async" src="/wp-content/themes/paydaysay/assets/img/secured-icon.svg" alt="Secured icon" width="20" height="20">
                            </div>
                            <div class="item2">
                                <p>Your personal data is secured</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="what-paydaysay" data-anim-item>
            <div class="container-my">
                <h3 class="section-title">What PaydaySay is like?</h3>
                <div class="grid-container-my">
                    <div class="item">
                        <div class="like">Like</div>
                        <div class="item-inner">
                            <div class="img-block">
                                <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/dave.png" alt="like dave" width="159" height="38.47">
                            </div>
                            <h4 class="item-title">but no <br> subscription fee</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="like">Like</div>
                        <div class="item-inner">
                            <div class="img-block">
                                <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/earnin.png" alt="like earnin" width="159" height="38.47">
                            </div>
                            <h4 class="item-title">but no bank account <br> info needed</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="like">Like</div>
                        <div class="item-inner">
                            <div class="img-block">
                                <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/klarna.png" alt="like klarna" width="159" height="38.47">
                            </div>
                            <h4 class="item-title">but no <br> hard credit checks</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="like">Like</div>
                        <div class="item-inner">
                            <div class="img-block">
                                <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/moneylion.png" alt="like moneylion" width="159" height="38.47">
                            </div>
                            <h4 class="item-title">but quicker</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-borrow-money" data-anim-item>
            <div class="container-my">
                <h3 class="section-title">How to Borrow Money from PayDaySay</h3>
                <p class="sub-title">Need funds quickly? Open PayDaySay for fast funding in minutes. Our process is secure, protecting your personal and banking data, as well as account activity.</p>
                <div class="grid-container-my">
                    <div class="item-left">
                        <div class="item-content">
                            <div class="step-item">
                                <div class="step-title-block">
                                    <div class="num">1</div>
                                    <h4 class="step-title">Submit Web Request</h4>
                                </div>
                                <p class="text">To send funds, we only require name, bank account, and phone number. We support Chime, Spotme, and PayDaySay.</p>
                            </div>
                            <div class="step-item">
                                <div class="step-title-block">
                                    <div class="num">2</div>
                                    <h4 class="step-title">Get Quick Offer</h4>
                                </div>
                                <p class="text">No travel required. Our payday loan app matches you instantly with trusted lenders for fast approval. PayDaySay is the only app that works with instant lenders.</p>
                            </div>
                            <div class="step-item">
                                <div class="step-title-block">
                                    <div class="num">3</div>
                                    <h4 class="step-title">Receive the Cash</h4>
                                </div>
                                <p class="text">Get fast unsecured personal loans via direct deposit using our free app. Suitable for all credit types. Tips appreciated, no service fees.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item-right">
                        <div class="img-block">
                            <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/howborrowmoney.png" alt="Borrow money" width="974" height="734">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-community" data-anim-item>
            <div class="container-my special-container">
                <div class="grid-container-my">
                    <div class="item-left">
                        <div class="item-inner">
                            <div class="grid-container-my-2">
                                <div class="left-sw">

                                    <div class="swiper left-swiper">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper left-swiper-wrapper">
                                            <!-- Slides -->
                                            <div class="swiper-slide left-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">Personally I have never used such an amazing loan app like this. It really came through for me when I needed a loan that one time something which I really appreciated. I was stuck and really needed it and they ensured I got it. They also operate 24/7 unlike most loan organisations. I really loved them and highly recommended them.</p>
                                                    <div class="author-block">
                                                        <p class="author">Virginia</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/playmarket-icon.png" alt="playmarket" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide left-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">I was able to obtain funding with the help of the payday loan app. There were no problems. Excellent services! Big thumbs up to the staff member I interacted with at this amazing organization. I am so grateful to this organization and would highly recommend them to anyone. They are quick and efficient with no difficulties.</p>
                                                    <div class="author-block">
                                                        <p class="author">Ava</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/playmarket-icon.png" alt="playmarket" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide left-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">Hold on a sec. You have to hear it because I am so excited about this app. That is my second time here and I am very satisfied with with the terms. For my fist time I did not asked for a big amount of money. But now I have some unexpected bills and I need to pay it right now. So, I have no other choice how to ask for a online loan one more time. I didn’t expect to get any money from a direct lender. But to my big surprise I got it. You saved my life and a bog thank you to my lender. I am dealing with my problems now, but I managed to pay back a half of the funds now. And hopefully I can do the rest of the debt without any further issues. This app is great.</p>
                                                    <div class="author-block">
                                                        <p class="author">Rusind</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/apple-icon.png" alt="Apple" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide left-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">So worth it.. It made getting a loan for $1000 painless as possible. The friend introduced the borrowing software very well. The speed is very fast and it’s very convenient. I work alone in other places! My friend recommended me this loan software! I used it once! borrowed money to buy a mobile phone. It feels good! loan is suitable for individuals to borrow money. Thanks a lot! YOU guys are the best. You made it so easy I will tell all my friends if they ever need a cash advance loan for bad credit people then check out this app.</p>
                                                    <div class="author-block">
                                                        <p class="author">Jopi</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/apple-icon.png" alt="Apple" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="right-sw">

                                    <div class="swiper right-swiper">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper right-swiper-wrapper">
                                            <!-- Slides -->
                                            <div class="swiper-slide right-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">Guys, pay attention to this Payday Advance app!! This is definitely the best thing that ever happened to me. I had no time to explain to my friends to help me with my unexpected bills; I was happy that I found this rescue. I heard from mates that there are apps that can connect you in order to obtain cash, but I didn't believe this was actually not cheating. I would put 10 stars if I was able to. Really, big thanks)))</p>
                                                    <div class="author-block">
                                                        <p class="author">DoniLika</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/apple-icon.png" alt="Apple" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide right-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">I was in an extreme situation when I needed money that night. I have broken my friend's bike and I had to fix it till my friend came back. I found a professional in fixing bikes but he took twice the price. I was not satisfied, but I had no other variant. So, I turned here to get money immediately. To be honest, I was waiting for 1 day, but it doesn't matter now. I got the whole sum and paid for fixing it.</p>
                                                    <div class="author-block">
                                                        <p class="author">Joshua</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/apple-icon.png" alt="Apple" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide right-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">I tried this money app when I lost my job. I clearly remember that feeling, when nobody can support you and you stayed one to one with your problems. But everything changed when I found this app. I am really thankful to you! Since that time I have used this app several times and everyone had a good experience.</p>
                                                    <div class="author-block">
                                                        <p class="author">Brooke</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/apple-icon.png" alt="Apple" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide right-swiper-slide">
                                                <div class="slide-inner">
                                                    <p class="text">I liked this idea of advance payday. It's super convenient - if you don't have enough money before payday, you don't have to ask friends or acquaintances to lend you money. I often use this app, especially when I am totally short of money at the end of the month. Therefore, I can afford more than usual.</p>
                                                    <div class="author-block">
                                                        <p class="author">Hawkins</p>
                                                        <img class="icon-img" src="/wp-content/themes/paydaysay/assets/img/apple-icon.png" alt="Apple" width="30" height="30">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-right">
                        <div class="item-content">
                            <div class="img-block">
                                <img class="ourcom-users-img" src="/wp-content/themes/paydaysay/assets/img/ourcom-users.png" alt="Users" width="152.71" height="60.82">
                            </div>
                            <div class="img-block">
                                <img class="outcom-rev-img" src="/wp-content/themes/paydaysay/assets/img/ourcom-rev.png" alt="Reviews" width="272" height="47">
                            </div>
                            <h3 class="section-title">Our community loves PayDaySay</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-partners" data-anim-item>
            <div class="container-my">
                <h2 class="section-title">Our partners</h2>
                <div class="row-my flex-container-my">
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/PersonalLoans-hover.png" alt="PersonalLoans" width="171">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/LendUp-hover.png" alt="LendUp" width="70" height="30">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/Opploans-hover.png" alt="Opploans" width="95" height="21.24">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/Ondeck-hover.png" alt="Ondeck" width="86" height="20.98">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/Cura-hover.png" alt="Cura" width="85" height="23.35">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/Fundera-hover.png" alt="Fundera" width="89" height="24">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/CashNet-hover.png" alt="CashNet" width="108" height="17">
                    </div>
                    <div class="item">
                        <img loading="lazy" decoding="async" class="partner-logo-img"src="/wp-content/themes/paydaysay/assets/img/CashAdv-hover.png" alt="CashAdv" width="168.11" height="17">
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </section>

        <section class="tips-for-using-new" data-anim-item>
            <div class="container-my">
                <h3 class="section-title">Tips for Using Loan App Wisely</h3>
                <p class="sub-title">Need cash? Check savings. No savings? Can't cover purchases? Use low-fee borrowing apps wisely to avoid debt, interest and protect credit score. Top tips:</p>
                <div class="grid-container-my">
                    <div class="item-right">
                        <div class="img-block">
                            <img class="item-img" src="/wp-content/themes/paydaysay/assets/img/tips-home-img.png" alt="Tips Loan" width="974" height="734">
                        </div>
                    </div>
                    <div class="item-left">
                        <div class="item-content">
                            <div class="step-item">
                                <div class="step-title-block">
                                    <div class="num"><img class="item-img" src="/wp-content/themes/paydaysay/assets/img/tips-icon.png" alt="Tips icon"  width="48" height="48"></div>
                                    <h4 class="step-title">Only borrow what you can repay.</h4>
                                </div>
                                <p class="text">Website has penalty info. Be careful with withdraw amount. Consider waiting, saving to avoid contract.</p>
                            </div>
                            <div class="step-item">
                                <div class="step-title-block">
                                    <div class="num"><img class="item-img" src="/wp-content/themes/paydaysay/assets/img/tips-icon.png" alt="Tips icon"  width="48" height="48"></div>
                                    <h4 class="step-title">Take a look at your credit.</h4>
                                </div>
                                <p class="text">Check credit report for errors. Good credit affects eligibility for best loans. Pay bills on time, repay debt to maintain good credit.</p>
                            </div>
                            <div class="step-item">
                                <div class="step-title-block">
                                    <div class="num"><img class="item-img" src="/wp-content/themes/paydaysay/assets/img/tips-icon.png" alt="Tips icon"  width="48" height="48"></div>
                                    <h4 class="step-title">Shop around for the best rates.</h4>
                                </div>
                                <p class="text">Compare lender quotes for best rates and flexibility. Read fine print to avoid fees.</p>
                            </div>
                        </div>
                        <div class="img-block">
                            <img class="item-img-mob" src="/wp-content/themes/paydaysay/assets/img/tips-home-img.png" alt="Tips Loan" width="974" height="734">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tips-for-using" data-anim-item>
            <div class="container-my">
                <h3 class="title">Featured Articles</h3>
                <div class="grid-container-my">
                    <div class="article">
                        <a href="/sites-like-lendup/">
                            <img loading="lazy" decoding="async" class="article-img" src="/wp-content/themes/paydaysay/assets/img/article-1.jpg" alt="Sites Like LendUp" width="380" height="195">
                            <div class="article-content">
                                <p class="date">Dec 17, 2022</p>
                                <h4 class="article-title">Sites Like LendUp & Alternative Lenders</h4>
                                <div class="row-my flex-container-my-3">
                                    <div class="person">
                                        <img loading="lazy" decoding="async" class="person-img" src="/wp-content/themes/paydaysay/assets/img/Alison-Martin.jpg" alt="Alison Martin" width="32" height="32">
                                        <span class="name">Allison Martin</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="article">
                        <a href="/loan-sites-like-cashnetusa/">
                            <img loading="lazy" decoding="async" class="article-img" src="/wp-content/themes/paydaysay/assets/img/article-2.jpg" alt="Loan Sites Like CashNetUSA" width="380" height="195">
                            <div class="article-content">
                                <p class="date">Jun 24, 2022</p>
                                <h4 class="article-title">Loan Sites Like CashNetUSA & Competitors</h4>
                                <div class="row-my flex-container-my-3">
                                    <div class="person">
                                        <img loading="lazy" decoding="async" class="person-img" src="/wp-content/themes/paydaysay/assets/img/Alison-Martin.jpg" alt="Alison Martin" width="32" height="32">
                                        <span class="name">Allison Martin</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="article">
                        <a href="/loans-like-speedy-cash/">
                            <img loading="lazy" decoding="async" class="article-img" src="/wp-content/themes/paydaysay/assets/img/article-3.jpg" alt="Speedy Cash Alternatives" width="380" height="195">
                            <div class="article-content">
                                <p class="date">Jun 24, 2022</p>
                                <h4 class="article-title">Speedy Cash Alternatives [Sites & Places]</h4>
                                <div class="row-my flex-container-my-3">
                                    <div class="person">
                                        <img loading="lazy" decoding="async" class="person-img" src="/wp-content/themes/paydaysay/assets/img/Victoria-Zhilka.jpg" alt="Alison Martin" width="32" height="32">
                                        <span class="name">Victoria Zhilka</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="frequently-asked-questions" data-anim-item>
            <div class="container-my">
                <h2 class="section-title">Frequently Asked <br> Questions</h2>

                <div class="questions">

                    <div class="question">
                        <div class="row-my flex-container-my">
                            <h4 class="question-title">How do you qualify to request loan through PayDaySay?</h4>
                            <span class="open-question"></span>
                        </div>
                        <div class="answer">
                            <p class="text">The lending decisions depend on each lending provider. Our app helps each client get loan options on a monthly basis but we can’t guarantee you will get access to the payday advance. In order to qualify for a cash advance you need to be a citizen of the USA, be over 18 years old, have an active bank account, and prove your steady employment.</p>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="question">
                        <div class="row-my flex-container-my">
                            <h4 class="question-title">How long will it take to get the money?</h4>
                            <span class="open-question"></span>
                        </div>
                        <div class="answer">
                            <p class="text">Clients can obtain the financing within the next business day after lender’s approval. While conventional crediting institutions take several business days to transfer the funds, this is one of the most reliable apps for requesting small loans with competitive rates.</p>
                        </div>
                        <div class="line"></div>
                    </div>

                </div>

                <div class="btn-block">
                    <a href="/faq/" class="btn view-more-questions-btn">View more questions</a>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>