<?php

if ( ! class_exists( 'CoShortCode' ) ) {
	/**
	 * Class CoShortCode
	 *
	 * @since 0.0.1
	 */
	class CoShortCode {

		/**
		 * CoShortCode constructor.
		 */
		public function __construct() {
			self::init();
		}

		/**
		 * Initialize
		 *
		 * @since 0.0.1
		 */
		public function init() {
			add_action( 'init',                     array( $this, 'add_plugin'      ) );
			add_filter( 'mce_plugins',              array( $this, 'mce_plugins'     ) );

			add_action( 'wp_ajax_response_path',    array( $this, 'response_path'   ) );

			add_shortcode( 'homeUrl',               array( $this, 'homeurl'         ) );
			add_shortcode( 'siteUrl',               array( $this, 'siteurl'         ) );
			add_shortcode( 'assetsPath',            array( $this, 'assets_path'     ) );
			add_shortcode( 'imagePath',             array( $this, 'image_path'      ) );

			add_shortcode( 'home_url',              array( $this, 'homeurl'         ) );
			add_shortcode( 'site_url',              array( $this, 'siteurl'         ) );
			add_shortcode( 'assets_path',           array( $this, 'assets_path'     ) );
			add_shortcode( 'image_path',            array( $this, 'image_path'      ) );
		}

		/**
		 * Return path to use at short code.
		 *
		 * @since 0.0.1
		 */
		static function response_path() {
			$res['home_url']    = esc_url( home_url( '/' ) );
			$res['site_url']    = esc_url( site_url( '/' ) );
			$res['assets_path'] = esc_url( get_template_directory_uri() . '/assets/' );
			$res['image_path']  = esc_url( get_template_directory_uri() . '/assets/images/' );

			echo json_encode( $res );

			die();
		}

		/**
		 * Display the home URL.
		 *
		 * @param $atts
		 * @return string
		 *
		 * @since 0.0.1
		 */
		function homeurl( $atts ) {
			extract( shortcode_atts( array(
                'path' => '/',
            ), $atts ) );

			return esc_url( home_url( $path ) );
		}

		/**
		 * Display the site URL.
		 *
		 * @param $atts
		 * @return string
		 *
		 * @since 0.0.1
		 */
		function siteurl( $atts ) {
			extract( shortcode_atts( array(
				'path' => '/',
			), $atts ) );

			return esc_url( site_url( $path ) );
		}

		/**
		 * Display the URL to the theme in the assets directory.
		 *
		 * @param $atts
		 * @return string
		 *
		 * @since 0.0.1
		 */
		function assets_path( $atts ) {
			extract( shortcode_atts( array(
				'path' => '/',
			), $atts ) );

			return esc_url( get_template_directory_uri() . '/assets/' . $path );
		}

		/**
		 *  Display the URL to the theme in the image directory.
		 *
		 * @param $atts
		 * @return string
		 *
		 * @since 0.0.1
		 */
		function image_path( $atts ) {
			extract( shortcode_atts( array(
				'path' => '/',
			), $atts ) );

			return esc_url( get_template_directory_uri() . '/assets/images/' . $path );
		}

		/**
		 * Add plugin.
		 *
		 * @since 0.0.1
		 */
		public function add_plugin() {
			if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) )
				return;
			if ( get_user_option( 'rich_editing' ) ) {
				add_filter( 'mce_external_plugins', array( $this, 'co_mce_external_plugins' ) );
			}
		}

		/**
		 * Loading plugin file for TinyMCE.
		 *
		 * @param $plugin_array
		 *
		 * @return mixed
		 * @since 0.0.1
		 */
		public function co_mce_external_plugins($plugin_array) {
			$plugin_array['co_do_short_code'] = esc_url( get_template_directory_uri() ) . '/class/js/editor_plugin.js';
			return $plugin_array;
		}

	}
	new CoShortCode();
}



