<?php

// toc list function
function getTocList( string $content ) {
	$encodedContent = mb_convert_encoding( $content, 'HTML-ENTITIES', 'UTF-8' );
	$doc            = new DOMDocument();
	$doc->loadHTML( $encodedContent );
	$xpath    = new DOMXpath( $doc );
	$query    = get_field( 'toc_activate_h3_tags', 'option' ) ? '//h2 | //h3' : '//h2';
	$headings = $xpath->query( $query );
	if ( $headings->length < 1 ) {
		return;
	}

	return array_map( function ( $heading ) {
		$id = str_replace( [ ':', ' ', '.', '#', '?', '’' ], [ '', '_', '_', '_', '_', '_' ], $heading->nodeValue );
		if ( is_numeric( $id[0] ) ) {
			$id = substr( $id, 1 );
		}
		$id = rtrim( $id, '_' );

		return [
			'id'    => $id,
			'value' => $heading->nodeValue
		];
	}, iterator_to_array( $headings ) );
}

// toc list html function
function getTocListHtml( $content ) {

	if ( ! is_string( $content ) ) {
		return;
	}

	$tocList = getTocList( $content );
	if ( ! $tocList ) {
		return;
	}

	return array_map( function ( $element ) {
		return '<li class="sample-post__toc-list-item">
                <a class="sample-post__toc-list-item-link" href="#' . $element['id'] . '">' . $element['value'] . '</a>
            </li>';
	}, $tocList );
}

function changeDate( $title ) {
	if ( strpos( $title, "%year%" ) !== false ) {
		$date  = date( "Y" );
		$title = str_replace( '%year%', $date, $title );
	}
	if ( strpos( $title, "%month%" ) !== false ) {
		$month = date( "F" );
		$title = str_replace( '%month%', $month, $title );
	}

	return $title;
}

add_action( 'parse_request', 'cdxn_search_by_id' );
function cdxn_search_by_id( $wp ) {
	global $pagenow;
	if( !is_admin() && 'edit.php' != $pagenow) {
		return;
	}

	// If it's not a search return
	if( !isset( $wp->query_vars['s'] ) ) {
		return;
	}

	// Validate the numeric value
	$id = absint( substr( $wp->query_vars['s'], 0 ) );
	if( !$id ) {
		return;
	}

	unset( $wp->query_vars['s'] );
	$wp->query_vars['p'] = $id;
}

// remove additional tag p inside acf WYSIWYG editor
function my_acf_add_local_field_groups() {
	remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'my_acf_add_local_field_groups');
