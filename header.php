<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preload"
	      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
	      as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet"
		      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap">
	</noscript>
	<?php ?>
	<?php if ( have_rows( 'custom_schema' ) ): ?>
		<?php while ( have_rows( 'custom_schema' ) ) : the_row(); ?>
			<script type="application/ld+json"> {
    "@context": "https://schema.org",
    "@type": "WebPage",
<?php if ( have_rows( 'custom_schema_webpage' ) ): ?>
					<?php while ( have_rows( 'custom_schema_webpage' ) ): the_row(); ?>
						<?php the_sub_field( 'custom_schema_webpage_more' ); ?>,
<?php endwhile; ?>
				<?php endif; ?>
    "mainEntityOfPage":{
    "@type": "Article",
    "about":
    {
    "@type": "LoanOrCredit",
<?php if ( have_rows( 'custom_schema_about' ) ): ?>
					<?php while ( have_rows( 'custom_schema_about' ) ): the_row(); ?>
						<?php the_sub_field( 'custom_schema_about_more' ); ?>,
<?php endwhile; ?>
				<?php endif; ?>
    "currency": "USD",
    "areaServed": "US",
    "termsOfService":"https://paydaysay.com/terms-and-conditions/"
	},
	"author": 
	{
	"@type": "Person"
<?php if ( have_rows( 'custom_schema_person' ) ): ?>
					<?php while ( have_rows( 'custom_schema_person' ) ): the_row(); ?>
						<?php the_sub_field( 'custom_schema_person_more' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
	},
    "publisher":
    {
    "@type": "Organization",
    "name": "PayDaySay",
    "url": "https://paydaysay.com/",
    "logo": {
    "@type": "ImageObject",
    "url": "https://paydaysay.com/img/PayDaySay.svg"
    }
    }
    },
    "reviewedBy":{
    "@type":"Organization",
    "name":"PayDaySay",
    "url": "https://paydaysay.com/about/"
    }
    }
    }








			</script>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

	<?php
	$rows = get_field( 'custom_schema_breadcrumbs' );
	if ( $rows ) {
		foreach ( $rows as $row ) { ?>
			<script type="application/ld+json"> {
    "@context": "https://schema.org/", 
    "@type": "BreadcrumbList", 
    "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "PayDaySay",
    "item": "https://paydaysay.com/"  
    },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?php echo $row['custom_schema_breadcrumbs_shortname'] ?>",
    "item": "<?php echo $row['custom_schema_breadcrumbs_url'] ?>"  
    }]
    }








			</script>
			<?php
		}
	} ?>


	<?php ?>
	<?php if ( have_rows( 'custom_schema_faq' ) ): ?>
		<?php while ( have_rows( 'custom_schema_faq' ) ) : the_row(); ?>
			<script type="application/ld+json"> {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
<?php if ( have_rows( 'custom_schema_faq_more' ) ): ?>
					<?php while ( have_rows( 'custom_schema_faq_more' ) ): the_row(); ?>
    "@type": "Question",
    "name": "<?php the_sub_field( 'custom_schema_faq_question' ); ?>",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "<?php the_sub_field( 'custom_schema_faq_answer' ); ?>"
    },{
<?php endwhile; ?>
				<?php endif; ?>
    }]
    }








			</script>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

	<?php wp_head(); ?>
	<?php if ( ! is_front_page() ): ?>
<!--		<script>-->
<!--			!function (t, e, n, s, a, c, i, o, p) {-->
<!--				t.AppsFlyerSdkObject = a, t.AF = t.AF || function () {-->
<!--					(t.AF.q = t.AF.q || []).push([Date.now()].concat(Array.prototype.slice.call(arguments)));-->
<!--				}, t.AF.id = t.AF.id || i, t.AF.plugins = {}, o = e.createElement(n), p = e.getElementsByTagName(n)[0], o.async = 1, o.src = "https://websdk.appsflyer.com?" + (c.length > 0 ? "st=" + c.split(",").sort().join(",") + "&" : "") + (i.length > 0 ? "af_id=" + i : ""), p.parentNode.insertBefore(o, p);-->
<!--			}(window, document, "script", 0, "AF", "banners", {banners: {key: "393c0c98-e6cb-483e-82a0-294f22ccf29a"}});-->
<!--			AF("banners", "showBanner", {bannerContainerQuery: "#smart-banner-holder", bannerZIndex: 1000});-->
<!--		</script>-->
	<?php endif; ?>

</head>



<body <?php echo body_class(); ?>>

<?php wp_body_open(); ?>
<?php if ( ! is_front_page() ): ?>
	<div id="smart-banner-holder"></div>
<?php endif; ?>

<header id="header" class="header">
	<div class="container">
		<div class="row main_header">
			<div class="col-10 col-lg-3 col-xl-2 d-flex">
				<a href="<?= get_home_url(); ?>" class="header_logo">
					<img loading="lazy" src="/wp-content/themes/paydaysay/assets/img/pds-logo.svg" alt="Payday Say Logo">
				</a>
				<?php if ( ! is_front_page() ): ?>
					<div class="btn-holder col-5 d-lg-none">
						<a href="/form/" class="btn btn-secondary">Request loan</a>
					</div>
				<?php endif; ?>
			</div>
			<div
				class="<?php if ( is_front_page() ): echo 'col-lg-8 col-xl-10'; else: echo 'col-lg-6 col-xl-8'; endif; ?> d-lg-block d-none">
				<?php
				if ( has_nav_menu( 'header-menu' ) ) :
					wp_nav_menu( [
						'theme_location'  => 'header-menu',
						'menu'            => 'Header Menu',
						'container'       => 'nav',
						'container_class' => 'top_header',
						'menu_class'      => 'top_header_link',
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
					] );
				endif;
				?>
			</div>
			<?php if ( ! is_front_page() ): ?>
				<div class="btn-holder col-2 col-lg-3 col-xl-2 d-none d-lg-block">
					<a href="/form/" class="btn btn-secondary">Request loan</a>
				</div>
			<?php endif; ?>
			<div class="hamburger_menu_list d-lg-none col-2">
				<?php get_template_part( 'part-templates/hamburger-menu' ); ?>
			</div>
		</div>
	</div>
</header>