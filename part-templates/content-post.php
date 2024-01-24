<?php
/**
 * Template part for displaying page content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paydaysay
 */

//the_content();
$content = apply_filters( 'the_content', get_the_content() );
if ( $content ) {
	$content_with_href = do_shortcode( setIdsForHeadings( $content ) );
	echo str_replace( array( '<html>', '</html>', '<body>', '</body>', ), '', $content_with_href );
}
