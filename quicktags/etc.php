<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_sitemap_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_sitemap_quicktags' );
	function oxsn_sitemap_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_sitemap_quicktag', '[oxsn_sitemap]', '[oxsn_sitemap post_type="page" class=""]', '[/oxsn_sitemap]', 'oxsn_sitemap', 'Sitemap', 201 );
			</script>

		<?php

		}

	}

}


?>