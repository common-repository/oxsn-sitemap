<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_sitemap post_type="" exclude="" exclude_tree="" class=""]
if ( ! function_exists ( 'oxsn_sitemap_shortcode' ) ) {

	add_shortcode('oxsn_sitemap', 'oxsn_sitemap_shortcode');
	function oxsn_sitemap_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
			'exclude' => '',
			'exclude_tree' => '',
			'post_type' => 'page',
		), $atts );

		$oxsn_sitemap_class = esc_attr($a['class']);

		$oxsn_sitemap_exclude = esc_attr($a['exclude']);

		$oxsn_sitemap_exclude_tree = esc_attr($a['exclude_tree']);
		
		$oxsn_sitemap_post_type = esc_attr($a['post_type']);

		$output=
		'<ul class="oxsn_sitemap ' . $oxsn_sitemap_class . '">'.
		wp_list_pages('post_type=' . $oxsn_sitemap_post_type . '&exclude=' . $oxsn_sitemap_exclude . '&exclude_tree=' . $oxsn_sitemap_exclude_tree . '&title_li=&sort_column=menu_order&echo=0') .
		'</ul>';

		return $output;

	}

}


?>