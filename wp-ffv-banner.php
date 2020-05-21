<?php
/**
 * Plugin Name: wp-ffv-banner
 * Plugin URI: https://github.com/FreifunkVogtland/wp-ffv-banner
 * Description: Youtube banner for the start page of vogtland.freifunk.net
 * Version: 1.0
 * Author: Freifunk Vogtland
 * Author URI: https://vogtland.freifunk.net
 */

wp_register_style('wp-ffv-banner-style', plugins_url('css/wp-ffv-banner.css', __FILE__), [], false);
wp_enqueue_style('wp-ffv-banner-style');

add_action('vantage_after_masthead', function() {
	if (!is_front_page())
		return;

?>
<div data-stretch="true">
	<div class="ffv-banner">
		<div class="ffv-banner-region">
			<?= do_shortcode('[dsgvo-youtube url="//www.youtube.com/watch?v=2Z12OjnPADA" images="/wordpress/wp-content/uploads/2020/05/2Z12OjnPADA.jpg"][/dsgvo-youtube]'); ?>
		</div>
	</div>
</div>
<?php
});
