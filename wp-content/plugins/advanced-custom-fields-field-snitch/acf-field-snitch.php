<?php
/*
Plugin Name: Advanced Custom Fields: Field Snitch
Plugin URI: wordpress.org/plugins/advanced-custom-fields-field-snitch/
Description: Double-tap Esc when editing a page containing ACF-fields, to easily inspect ACF field names and keys.
Version: 1.0.3
Author: Stupid Studio
Author URI: http://stupid-studio.com/
License: GPL
Copyright: Stupid Studio
*/
define('ACF_FIELD_SNITCH_VERSION', '1.0.3');

class AcfFieldSnitch
{
	public function __construct()
	{
		add_action('acf/input/admin_enqueue_scripts', array($this, 'action_acf_input_admin_enqueue_scripts'));
		add_action('acf/input/admin_head', array($this, 'action_acf_input_admin_head'));
	}
	
	public function action_acf_input_admin_enqueue_scripts()
	{
		// copy to clip board dependency
		wp_enqueue_script('zeroclip', plugin_dir_url(__FILE__)."lib/ZeroClipboard.min.js", array('jquery') );
		
		// our scripts
		wp_enqueue_script('acf_snitch', plugin_dir_url(__FILE__)."snitch.js", array('jquery'), ACF_FIELD_SNITCH_VERSION );
		wp_enqueue_style('acf_snitch', plugin_dir_url(__FILE__)."snitch.css", array(), ACF_FIELD_SNITCH_VERSION );
	}
	
	public function action_acf_input_admin_head()
	{
		?>
		<script type="text/javascript">
			ZeroClipboard.config({
				moviePath: <?= json_encode(plugin_dir_url(__FILE__)."lib/ZeroClipboard.swf"); ?>,
				forceHandCursor: true,
				autoActivate: false
			});
		</script>
		<?php
	}
}


add_action('init', function() {
	
	if (current_user_can('manage_options'))
	{
		new AcfFieldSnitch();
	}
	
});