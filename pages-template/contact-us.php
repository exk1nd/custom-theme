<?php
/* Template Name: Contact us
Template Post Type: post, page, cinema
*/
get_header();

?>

    <main>
        <section id="tableblock">
            <div class="table-description" itemprop="mainContentOfPage">
                <h1 class="page-title">Contact Us</h1> </header>
                <p>Have any questions regarding the site use? We will be happy to get any feedback from our
                    visitors.</p>
                <p>Please, note that PaydaySay is not a lender, loan broker or agent for any lender. We are a referral
                    service. <strong>Questions related to the loan request status must be asked the lender
                        directly.</strong></p>
                <p><span lang="EN-US"><strong>Payday Say never contacts or calls its clients.</strong></span></p>
                <p>If you receive phone calls and someone tells you that he/she presents Payday Say, never trust these
                    people.</p>
                <p>We only help our consumers to find loan lenders by filling out a loan request form on our
                    website.</p>

                <form action="/sent-mail-2.php" method="post" class="contact-form">
                    <div class="fieldset">
                        <div class="form-group">
                            <label for="name">Contact name <span class="req">*</span></label>
                            <div class="field">
                                <input type="text" name="name" id="name" class="required" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email <span class="req">*</span></label>
                            <div class="field">
                                <input type="email" name="email" id="email" class="required" value=""/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <div class="field">
                                <input type="tel" name="phone" id="phone" value=""/>
                            </div>
                        </div>
                        <div class="form-group full">
                            <label for="message">Message <span class="req">*</span></label>
                            <div class="field">
                                <textarea cols="50" rows="4" name="message" id="message" class="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </section>
    </main>

<?php get_footer(); ?>