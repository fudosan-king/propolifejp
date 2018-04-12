<?php

if ( ! class_exists( 'CoCustomPostTypes' ) ) {
	/**
	 * Class CoCustomPostTypes
	 *
	 * @since 0.0.1
	 */
	class CoCustomPostTypes {
		/**
		 * CoCustomPostTypes constructor.
		 *
		 * @since 0.0.1
		 */
		public function __construct() {}

		/**
		 * Create Custom post type.
		 *
		 * @param $options
		 * @since 0.0.1
		 */
		static function create_custom_post_type( $options ) {
			$slug = $options['slug'];
			$args = $options['args'];

			register_post_type( $slug, $args );
		}

		/**
		 * Create Custom post types.
		 *
		 * @param $args
		 * @since 0.0.1
		 */
		static function create_custom_post_types( $args ) {
			foreach( $args as $arg ) {
				self::create_custom_post_type( $arg );
			}
		}
	}
	new CoCustomPostTypes();
}


