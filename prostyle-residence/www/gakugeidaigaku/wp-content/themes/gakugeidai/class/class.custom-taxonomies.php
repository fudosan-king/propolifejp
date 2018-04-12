<?php

if ( ! class_exists( 'CoCustomTaxonomies' ) ) {
	/**
	 * Class CoCustomTaxonomies
	 *
	 * @since 0.0.1
	 */
	class CoCustomTaxonomies {
		/**
		 * CoCustomTaxonomies constructor.
		 *
		 * @since 0.0.1
		 */
		public function __construct() {}

		/**
		 * Create taxonomy.
		 *
		 * @param $options
		 * @since 0.0.1
		 */
		static function create_taxonomy( $options ) {
			$pt_slug    = $options['post_type_slug'];
			$slug       = $options['slug'];
			$args       = $options['args'];

			register_taxonomy( $slug, $pt_slug, $args );
		}

		/**
		 * Create taxonomies.
		 *
		 * @param $args
		 * @since 0.0.1
		 */
		static function create_taxonomies( $args ) {
			foreach ( $args as $arg ) {
				self::create_taxonomy( $arg );
			}
		}
	}
	new CoCustomTaxonomies();
}