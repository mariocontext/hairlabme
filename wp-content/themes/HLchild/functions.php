<?php

	function load_my_scripts() {

	$my_child_path = get_stylesheet_directory_uri();

			wp_register_script('mymodernizr', $my_child_path.'/js/modernizr-2.5.3-min.js', array(), '2.5.3', false);

			//wp_register_script('myhelper', $my_child_path.'/js/helper.js', array(), '1.0', true);

			//wp_register_script('mystacktable', $my_child_path.'/js/stacktable.js', array('jquery'), '1.1', true);

			wp_register_script('myfitvids', $my_child_path.'/js/jquery.fitvids.js', array('jquery'), '1.0', true);

			wp_register_script('myscripts', $my_child_path.'/js/scripts.js', array('jquery'), '1.2', true);

			wp_enqueue_script('mymodernizr');
			//wp_enqueue_script('myhelper');
			//wp_enqueue_script('mystacktable');
			wp_enqueue_script('myfitvids');
			wp_enqueue_script('myscripts', 10);

		}

add_action('wp_enqueue_scripts', 'load_my_scripts');