<?php
/*
Plugin Name: WP Plugin Template
Plugin URI: https://github.com/fyaconiello/wp_plugin_template
Description: A simple wordpress plugin template
Version: 1.0
Author: Francis Yaconiello
Author URI: http://www.yaconiello.com
License: GPL2
*/
/*
Copyright 2012  Francis Yaconiello  (email : francis@yaconiello.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists('WP_Plugin_Template'))
{
	class WP_Plugin_Template
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$WP_Plugin_Template_Settings = new WP_Plugin_Template_Settings();

			// Register custom post types
			require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();

			$plugin = plugin_basename(__FILE__);
			add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		} // END public function __construct

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=wp_plugin_template">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}


	} // END class WP_Plugin_Template
} // END if(!class_exists('WP_Plugin_Template'))

if(class_exists('WP_Plugin_Template'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('WP_Plugin_Template', 'activate'));
	register_deactivation_hook(__FILE__, array('WP_Plugin_Template', 'deactivate'));

	// instantiate the plugin class
	$wp_plugin_template = new WP_Plugin_Template();

}

//add_action( 'admin_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
    <script type="text/javascript" >
        jQuery(document).ready(function($) {
            //jQuery("#my_button").click(function(){

                var data = {
                    'action': 'my_action',
                    'whatever': 1234,
                    'id' : <?php the_ID() ?>,
                    'meta_a' : $('#meta_a').val(),
                    'meta_b' : $('#meta_b').val(),
                    'meta_c' : $('#meta_c').val()
                };

                //alert(1);
                //alert(data.meta_b);*/

                // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
                $.post(ajaxurl, data, function(response) {
                    if ( !response) {
                        alert('Error!');
                    }
                    else{
                        alert('Post whith ID <' + response + '> saved successfully!');
                           }
                    });
            //});

        });
    </script> <?php
}

//add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );
//add_action( 'wp_ajax_my_action', 'my_action_callback' );

function my_action_callback() {
    global $wpdb; // this is how you get access to the database

    $meta_a = $_POST['meta_a'];
    $meta_b = $_POST['meta_b'];
    $meta_c = $_POST['meta_c'];
    $id = $_POST['id'];

        $table_name = $wpdb->prefix . "table_for_meta";

    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name)
    {
        $sql = "CREATE TABLE " . $table_name . " (
	    id mediumint(9) NOT NULL AUTO_INCREMENT,
	    meta_a text NOT NULL,
	    meta_b text NOT NULL,
	    meta_c text NOT NULL,
	    UNIQUE KEY id (id)
	    );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    };

    //$wpdb->query("ALTER TABLE $table_name ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;");

    /*$wpdb->update( '$table_name',
        array( 'meta_a' => '$meta_a', 'meta_b' => '$meta_b', 'meta_c' => '$meta_c' ),
        array( 'id' => $id ),
        array( '%s', '%s', '%s' )
    );*/



    $wpdb->query("INSERT INTO ".$wpdb->prefix."table_for_meta (id, meta_a, meta_b, meta_c) VALUES ('$id', '$meta_a', '$meta_b', '$meta_c');");

    echo $id ;


    die(); // this is required to terminate immediately and return a proper response
}

/*add_action( 'admin_enqueue_scripts', 'my_enqueue' );
function my_enqueue($hook) {
    /*if( 'index.php' != $hook ) {
        // Only applies to dashboard panel
        return;
    }*/

  /*  wp_enqueue_script( 'ajax-script', plugins_url( '/js/my_query.js', __FILE__ ), array('jquery') );

    // in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.we_value
    wp_localize_script( 'ajax-script', 'ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'we_value' => 1234 ) );
}

// Same handler function...
add_action( 'wp_ajax_my_action', 'my_action_callback' );
function my_action_callback() {
    global $wpdb;
    $whatever = intval( $_POST['whatever'] );
    $whatever += 10;
    echo $whatever;
    die();
}*/

?>