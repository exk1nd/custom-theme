<?php
add_shortcode( 'money_fast_form', 'money_fast_form_func' );
//example [money_fast_form action="/form/" title="Need Money Fast?"]
function money_fast_form_func( $atts ) {
	return "<form class='money-fast-form' action='{$atts["action"]}' method='get'>
						<h4>{$atts["title"]}</h4>
						<div class='money-fast-form__inner'>
							<select name='loanAmount'>
								<option value='100' selected>$100 - $1.000</option>
								<option value='200'>$200 - $2.000</option>
								<option value='300'>$300 - $4.000</option>
								<option value='400'>$400 - $4.000</option>
								<option value='500'>$500 - $5.000</option>
							</select>
							<button type='submit' class='goto-btn'>Get Started</button>
						</div>
						<footer>
							<img loading='lazy' src='" . get_template_directory_uri() . "/assets/img/ico-protection.svg' alt='safe application' width='20' height='20'>
Your personal data is secured
</footer>
</form>";
}

add_shortcode( 'table_of_content', 'table_of_content_func' );
function table_of_content_func() {
	return "
	<div id='toc' class='toc-widget'>
		<div class='toc-widget__title'>
			<p>On this page</p>
		</div>
		<ul class='toc-widget__list'>
			
		</ul>
	</div>";
}

add_shortcode( 'creditor_card', 'creditor_card_func' );
//example [creditor_card id="2744"]
function creditor_card_func( $atts ) {
	$ID           = $atts['id'];
	$content_post = get_post( $ID );
//	var_dump($content_post);
	$title      = $content_post->post_title;
	$content    = $content_post->post_content;
	$conditions = get_field( 'creditor_conditions', $ID );


	return "<div class='creditor-card'>
				<div class='text-holder'>
					<h3>" . $title . "</h3>
					" . apply_filters( 'the_content', $content ) . "
				</div>
				<aside>
					<h3>" . $title . "</h3>
					<figure>
						<img src='" . $conditions['image'] . "' alt='image description'>
					</figure>
					<a href='/form/' class='goto-btn'>Get money</a>
					<ul>
						<li>
							 Rates (APR)
							 <span>" . $conditions['rates_apr'] . "</span>
						</li>
						<li>
							 Loan Amount
							 <span>" . $conditions['loan_amount'] . "</span>
						</li>
						<li>
							 Repayment Terms
							 <span>" . $conditions['repayment_terms'] . "</span>
						</li>
					</ul>
				</aside>
			</div>";
}


add_shortcode( 'app_card', 'app_card_func' );
//example [app_card id="2777"]
function app_card_func( $atts ) {
	$ID           = $atts['id'];
	$content_post = get_post( $ID );
//	var_dump($content_post);
	$title      = $content_post->post_title;
	$content    = $content_post->post_content;
	$image      = get_field( 'image', $ID );
	$link       = get_field( 'link', $ID );
	$pros_block = "<ul class='pros-list'>";
	$cons_block = "<ul class='cons-list'>";
	if ( have_rows( 'pros_list', $ID ) ):
		while ( have_rows( 'pros_list', $ID ) ) : the_row();
			$item       = get_sub_field( 'pros_item' );
			$pros_block .= "<li>" . $item . "</li>";
		endwhile;
		$pros_block .= "</ul>";
	endif;
	if ( have_rows( 'cons_list', $ID ) ):
		while ( have_rows( 'cons_list', $ID ) ) : the_row();
			$item       = get_sub_field( 'cons_item' );
			$cons_block .= "<li>" . $item . "</li>";
		endwhile;
		$cons_block .= "</ul>";
	endif;

	return "<div class='app-card'>
				<header>
					<figure class='img-holder'>
						<img src='" . $image . "' alt='image description' loading='lazy'>
					</figure>
					<h3>" . $title . "</h3>
					<a href='" . $link['url'] . "' target='" . $link['target'] . "' class='btn btn-primary btn-icon-lock'>" . $link['title'] . "</a>
				</header>
				<div class='text-holder'>
					" . apply_filters( 'the_content', $content ) . "
				</div>
				<footer>
				<div class='item-holder'>
					<h3>Pros</h3>
					" . $pros_block . "
				</div>
				<div class='item-holder'>
					<h3>Cons</h3>
					" . $cons_block . "
				</div>
				</footer>
			</div>";
}

add_shortcode( 'credit_card_block', 'credit_card_block_func' );
//example [credit_card_block id="2807"]
function credit_card_block_func( $atts ) {
	$ID           = $atts['id'];
	$content_post = get_post( $ID );
//	var_dump($content_post);
	$main_title = $content_post->post_title;
	$content    = $content_post->post_content;
	$features   = get_field( 'features', $ID );
	$image      = get_field( 'image', $ID );
	$button     = get_field( 'button', $ID );

	$pros_block    = "<ul class='pros-list'>";
	$cons_block    = "<ul class='cons-list'>";
	$options_block = "<ul class='options-list'>";
	if ( have_rows( 'pros_list', $ID ) ):
		while ( have_rows( 'pros_list', $ID ) ) : the_row();
			$item       = get_sub_field( 'item' );
			$pros_block .= "<li>" . $item . "</li>";
		endwhile;
		$pros_block .= "</ul>";
	endif;
	if ( have_rows( 'cons_list', $ID ) ):
		while ( have_rows( 'cons_list', $ID ) ) : the_row();
			$item       = get_sub_field( 'item' );
			$cons_block .= "<li>" . $item . "</li>";
		endwhile;
		$cons_block .= "</ul>";
	endif;
	if ( have_rows( 'options_list', $ID ) ):
		while ( have_rows( 'options_list', $ID ) ) : the_row();
			$title         = get_sub_field( 'title' );
			$value         = get_sub_field( 'value' );
			$options_block .= "<li>" . $title . "<span>" . $value . "</span></li>";
		endwhile;
		$options_block .= "</ul>";
	endif;

	return "<div class='credit-card-block'>
				<h2>" . $main_title . "</h2>
				" . apply_filters( 'the_content', $content ) . "
				<div class='card-holder'>
					<div class='text-holder'>
						<h3>Key Features</h3>
						" . apply_filters( 'the_content', $features ) . "
						<div class='list-holder'>
							<h3>Pros</h3>
							" . $pros_block . "
						</div>
						<div class='list-holder'>
							<h3>Cons</h3>
							" . $cons_block . "
						</div>
					</div>
					<aside>
						<figure>
							<img src='" . $image . "' alt='image description' loading='lazy'>
						</figure>
						<a href='" . $button['url'] . "' target='" . $button['target'] . "' class='btn btn-primary btn-icon-lock'>" . $button['title'] . "</a>
						" . $options_block . "
					</aside>
				</div>
			</div>";
}

add_shortcode( 'preview_block', 'preview_block_func' );
//example [preview_block id="2864"]
function preview_block_func( $atts ) {
	$ID           = $atts['id'];
	$content_post = get_post( $ID );
	$title        = $content_post->post_title;
	$image        = get_the_post_thumbnail_url( $ID );
	$content      = $content_post->post_content;
	$button       = get_field( 'button', $ID );
	$gallery      = get_field( 'gallery', $ID );
	if ( $gallery ):
		$gallery_block = "<div class='preview-gallery'>";
		foreach ( $gallery as $image ):
			$gallery_block .= "<figure class='img-holder'>
						<img src='" . $image . "' alt='image description' loading='lazy'>
						<figcaption><a href='" . $button['url'] . "' target='" . $button['target'] . "' class='btn btn-primary btn-icon-lock'>" . $button['title'] . "</a></figcaption>
					</figure>";
		endforeach;;
		$gallery_block .= "</div>";
	endif;


	return "<div class='preview-block'>
					<h2>" . $title . "</h2>
					" . $gallery_block . "
					" . apply_filters( 'the_content', $content ) . "
			</div>";
}

add_shortcode( 'cta_block', 'cta_block_func' );
//example [cta_block link="/goto/application-form"]
function cta_block_func( $atts ) {
	return "<div class='cta-block'>
				<a href='{$atts["link"]}' class='goto-btn'>Get Started</a>
				<figure>
					<img src='" . get_template_directory_uri() . "/assets/img/ico-protection-02.svg' alt='image description' loading='lazy'>
					<figcaption>SSL protection & encryption</figcaption>
				</figure>
			</div>";
}

add_shortcode( 'banner_get_block', 'banner_get_block_func' );
//example [banner_get_block title="" text="" link=""]
function banner_get_block_func( $atts ) {
	return "<div class='banner-get-conteiner'>
				<h3>" . $atts['title'] . "</h3>
				<p class='banner-get-conteiner-midlle'>" . $atts['text'] . "</p>
				<p><a class='goto-btn' href='" . $atts['link'] . "'>Get Started</a></p>
				<p class='banner-get-conteiner-footer'>
					<img decoding='async' class='aligncenter size-full wp-image-2249' src='" . get_template_directory_uri() . "/assets/img/ico-protection-02.svg' alt='image description'>
					SSL protection & encryption
				</p>
				</div>";
}

add_shortcode( 'disclosure_block', 'disclosure_block_func' );
//example [disclosure_block title="" text=""]
function disclosure_block_func( $atts ) {
	return "<p class='tooltip-text' data-bs-toggle='tooltip' data-bs-placement='bottom' title='{$atts['text']}'>
				" . $atts['title'] . "
			</p>";
}
