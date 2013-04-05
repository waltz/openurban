<?php
/**
 * Parser functions for Semantic Drilldown
 *
 * @file
 * @ingroup SD
 *
 * The following parser function is defined: #drilldownlink
 *
 * #drilldownlink links to the page Special:BrowseData, with a query string
 * dictated by the parameters.
 *
 * {{#drilldownlink:category=|subcategory=|single|link text=|tooltip=|filter=}}
 *
 * @author Yaron Koren
 * @author mwjames
 */

class SDParserFunctions {

	static function registerFunctions( &$parser ) {
		$parser->setFunctionHook( 'drilldownlink', array( 'SDParserFunctions', 'renderDrilldownLink' ) );
		return true;
	}

	static function renderDrilldownLink( &$parser ) {
		$params = func_get_args();
		array_shift( $params );

		$specialPage = SDUtils::getSpecialPage( 'BrowseData' );

		// Set defaults.
		$inQueryArr = array();
		$inLinkStr = $category = $classStr = $inTooltip = '';

		// Parameters
		foreach ( $params as $i => $param ) {

			$elements = explode( '=', $param, 2 );

			// set param_name and value
			if ( count( $elements ) > 1 ) {
				$param_name = trim( $elements[0] );

				// parse (and sanitize) parameter values
				$value = trim( $parser->recursiveTagParse( $elements[1] ) );
			} else {
				$param_name = null;

				// parse (and sanitize) parameter values
				$value = trim( $parser->recursiveTagParse( $param ) );
			}

			if ( $param_name == 'category' || $param_name == 'cat' ) {
				$category = $value;
			} elseif ( $param_name == 'subcategory' || $param_name == 'subcat' ) {
				parse_str( '_subcat=' . $value , $arr);
				$inQueryArr = array_merge( $inQueryArr, $arr );
			} elseif ( $param_name == 'link text' ) {
				$inLinkStr = $value;
			} elseif ( $param_name == 'tooltip' ) {
				$inTooltip = Sanitizer::decodeCharReferences( $value );
			} elseif ( $param_name == null && $value == 'single' ) {
				parse_str( '_single' , $arr);
				$inQueryArr = array_merge( $inQueryArr, $arr );
			} elseif ( $param_name == 'filters' ) {
				$inQueryStr = str_replace( '&amp;', '%26', $value );
				parse_str( $inQueryStr, $arr );
				$inQueryArr = array_merge( $inQueryArr, $arr );
			}
		}

		$link_url = $specialPage->getTitle()->getLocalURL() . "/{$category}";
		$link_url = str_replace( ' ', '_', $link_url );
		if ( ! empty( $inQueryArr ) ) {
			$link_url .= ( strstr( $link_url, '?' ) ) ? '&' : '?';
			$link_url .= str_replace( '+', '%20', http_build_query( $inQueryArr, '', '&' ) );
		}

		$inLinkStr = ( empty($inLinkStr) ? $category : $inLinkStr ) ;
		$link = Html::rawElement( 'a', array( 'href' => $link_url, 'class' => $classStr, 'title' => $inTooltip ), $inLinkStr );

		// hack to remove newline from beginning of output, thanks to
		// http://jimbojw.com/wiki/index.php?title=Raw_HTML_Output_from_a_MediaWiki_Parser_Function
		return $parser->insertStripItem( $link , $parser->mStripState );
	}

}
