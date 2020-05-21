<?php
/**
 * Plugin Name: wp-ffv-banner
 * Plugin URI: https://github.com/FreifunkVogtland/wp-ffv-banner
 * Description: Youtube banner for the start page of vogtland.freifunk.net
 * Version: 1.0
 * Author: Freifunk Vogtland
 * Author URI: https://vogtland.freifunk.net
 */

add_action('vantage_after_masthead', function() {
	if (!is_front_page())
		return;

?>
<div data-stretch="true">
	<div style="position: relative; overflow: hidden; width: 100%; padding: 0; margin: 0 !important;">
		<div style="position: relative; padding-bottom: 32.407407407407%; height: 0;">
			<a data-fancybox="" href="esc_attr(//www.youtube.com/watch?v=2Z12OjnPADA)" style="position: absolute; top:-32.407407407407%; left:0; width: 100%; height: 100%">
				<img style="display: block; height: auto; float: left; width: 100%; border: 0; vertical-align: middle;" src="/wordpress/wp-content/uploads/2020/05/2Z12OjnPADA.jpg">
			</a>
		</div>
	</div>
</div>
<?php
});
