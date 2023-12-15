<section class="banner-main">
    <div class="container-my">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-main-text">
                    <p class="banner-home-title-main">Get the money faster!</p>
                    <p>Say goodbye to financial stress with our payday advance services.</p>
                    <div class="reviews-banner">
                        <img src="<?= get_template_directory_uri() . '/assets/img/reviews-banner-img.png'?>" alt="reviews" height="24" width="291">
                    </div>
                </div>
            </div>
            <div class="col-md-6 pdl">
                <form class="new-pre-form" action="/form/" method="get">
                    <input id="email" name="email" type="text" class="omInputText" placeholder="Your Email Address"
                           value="">
                    <div class="new-pre-form-group">
                        <select id="loanAmount" name="loanAmount" style="">
                            <option selected disabled>Loan Amount</option>
                            <option value="100">$100</option>
                            <option value="200">$200</option>
                            <option value="300">$300</option>
                            <option value="400">$400</option>
                            <option value="500">$500</option>
                            <option value="600">$600</option>
                            <option value="700">$700</option>
                            <option value="800">$800</option>
                            <option value="900">$900</option>
                            <option value="1000">$1000</option>
                            <option value="1500">$1500</option>
                            <option value="2000">$2000</option>
                            <option value="3000">$3000</option>
                            <option value="4000">$4000</option>
                            <option value="5000">$5000</option>
                        </select>
                    </div>
                    <div class="new-pre-form-group">
                        <select id="loanPurpose" name="loanPurpose">
                            <option selected disabled>Loan Purpose</option>
                            <option value="AUTO_REPAIR">Auto Repair</option>
                            <option value="CREDIT_CARD_CONSOLIDATION">Credit Card Consolidation</option>
                            <option value="DEBT_CONSOLIDATION">Debt Consolidation</option>
                            <option value="EMERGENCY_SITUATION">Emergency Situation</option>
                            <option value="HOME_IMPROVEMENT">Home Improvement</option>
                            <option value="MAJOR_PURCHASE">Major Purchase</option>
                            <option value="MEDICAL_EXPENSES">Medical Expenses</option>
                            <option value="MOVING">Moving</option>
                            <option value="OTHER">Other</option>
                        </select>
                    </div>
                    <button type="submit">Get started</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #FFF">
        <div class="container">
            <div class="col">
                <div class="social-banner-main">
                    <div class="row" style="--bs-gutter-x: 0;">
                        <div class="col-md-4 social-banner-main-app-banner">
                            <img src="<?= get_template_directory_uri() . '/assets/img/iphone-pds-new.png'?>" alt="money loan app" class="main-app-banner-mob">
                            <img src="<?= get_template_directory_uri() . '/assets/img/iphone-pds-new.png'?>" alt="money loan app" class="main-app-banner-desktop" width="483" height="408">
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="social-banner-main-text">
                                    <h1>Payday App: Financial Help for Everyone</h1>
                                </div>
                                <div class="col banner-social-mob-row">
                                    <button data-bs-toggle="modal" data-bs-target="#ModalPDS" class="btn download-app-btn-banner-desktop">Download app</button>
                                    <a href="https://apps.apple.com/us/app/payday-advance-borrow-money/id1542349316" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/appstore-pds-logo-new.png'?>" height="47" width="110" alt="payday advance ios" class="banner-social-mob-icon-1"></a>
                                    <a href="https://play.google.com/store/apps/details?id=com.payday.advance.money.loan&hl=en_US&gl=US" target="_blank"><img src="<?= get_template_directory_uri() . '/assets/img/playmarket-pds-logo-new.png'?>" height="47" width="110" alt="payday advance android" class="banner-social-mob-icon-2"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="ModalPDS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="modal-title">Get PayDaySay App</h2>
                <p class="modal-text">Scan QR code to download the app</p>
                <img loading="lazy" decoding="async" src="<?= get_template_directory_uri() . '/assets/img/PDS-QR.png'?>">
            </div>
        </div>
    </div>
</div>