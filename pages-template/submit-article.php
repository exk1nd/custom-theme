<?php
/* Template Name: submit-article
Template Post Type: post, page, cinema
*/
get_header();

?>

    <main class="main-sidebar">
    <div class=wrapper>
        <section id="tableblock">
            <div class="table-description" itemprop="mainContentOfPage">
                <h1>Write for Us</h1>

                <h2>Two reasons why you should write for PayDay Say</h2>
                <ol>
                    <li>Exposure: Our blog is quickly becoming popular on the web. As we continue adding new useful
                        posts, our articles get more and more visibility. Also, we have a lot of visitors from the USA,
                        Canada, UK and many other countries.</li>
                    <li>Keep your writing skills sharp. Yes, yes, even the greatest minds have to practice all the time.
                    </li>
                </ol>
                <p><span id="more-2489"></span></p>
                <h3>Before you apply for a contributor&#8217;s account, make sure you are aware of:</h3>
                <ul>
                    <li>Make sure you can provide us with links to your social media accounts (LinkedIn, Reddit,
                        Facebook, Twitter, Quora, etc.) and/or contributor&#8217;s profiles on various authority sites.
                    </li>
                    <li>We only accept articles on finance-related topics. They can be inforgraphics, how-to’s,
                        articles, original reporting and analysis, etc. Basically, to get the sense of what you should
                        write about, read our website!</li>
                    <li>Submission for one of our blog sections range from 800 and 1000 words, but not limited to it.
                    </li>
                    <li>We have a very large volume of submissions; therefore, allow us 72 business hours to accept your
                        piece.</li>
                    <li><em>If you want to include links, make sure they are relevant and useful for the reader</em>.
                        For instance, they can be to relevant blog articles on your site or on any other news sites. No
                        commercial links are allowed.</li>
                    <li>You can also include a two-sentence bio.</li>
                </ul>
                <br>
                <form action="/submit-form/" method="post" class="contact-form">
                	<div class="fieldset">
                		<div class="form-group">
                			<label for="name">Contact name <span class="req">*</span></label>
                			<div class="field">
                				<input type="text" name="name" id="name" class="required" value="" />
                			</div>
                		</div>
                		
                		<div class="form-group">
                			<label for="email">Email <span class="req">*</span></label>
                			<div class="field">
                				<input type="email" name="email" id="email" class="required" value="" />
                			</div>
                		</div>
                		
                		<div class="form-group">
                			<label for="phone">Phone number</label>
                			<div class="field">
                				<input type="tel" name="phone" id="phone" value="" />
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
    </div>
    <aside class="sidebar">
        <h3 class="sidebar-title">Featured Articles</h3>
        <div class="sidebar-item">
            <div class="sidebar-item-container">
                <div class="sidebar-item-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/loan-for-rent-now.jpg'?>" width="100%" align="center"
                        alt="Best Loans For Rent Payment">
                </div>
                <div class="sidebar-item-info">
                    <a class="sidebar-item-title" href="/what-are-emergency-loans-for-rent/"
                        title="Permalink to Need Money Desperately? Check for Your Fast Cash Options Now">Need Money for
                        Rent? Here Is How to Come Through</a>
                    <p class="sidebar-item-date">November 09, 2021</p>

                </div>
            </div>
            <div class="sidebar-item-container">
                <div class="sidebar-item-img">
                    <img loading="lazy" src="<?= get_template_directory_uri() . '/assets/img/100-dollar-loan.jpeg'?>" alt="100 dollar loan" width="100%">
                </div>
                <div class="sidebar-item-info">
                    <a class="sidebar-item-title" href="/100-dollar-loan/"
                        title="Permalink to I Need 100 Dollar Loan Today? Here’s How to Get a Small Loan Fast">I Need
                        100 Dollar Loan Today? Here’s How to Get a Small Loan Fast</a>
                    <p class="sidebar-item-date">November 07, 2021</p>

                </div>
            </div>
            <div class="sidebar-item-container">
                <div class="sidebar-item-img">
                    <img src="<?= get_template_directory_uri() . '/assets/img/best-loan-apps.jpeg'?>" width="100%" align="center" alt="Best Apps That Loan You">
                </div>
                <div class="sidebar-item-info">
                    <a class="sidebar-item-title" href="/best-cash-advance-apps/"
                        title="Permalink to Best Apps That Loan You Money">Best Apps That Loan You Money</a>
                    <p class="sidebar-item-date">November 11, 2021</p>

                </div>
            </div>
        </div>
    </aside>

</main>

<?php get_footer(); ?>