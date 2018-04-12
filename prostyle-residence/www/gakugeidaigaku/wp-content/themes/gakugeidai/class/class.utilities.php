<?php

if ( ! class_exists( 'CoUtilities' ) ) {
	/**
	 * Class CoUtilities
	 *
	 * @since 0.0.1
	 */
	class CoUtilities {
		/**
		 * CoUtilities constructor.
		 *
		 * @since 0.0.1
		 */
		public function __construct() {
			self::init();
		}

		/**
		 * Initialize
		 */
		public function init() {
			add_action( 'admin_head',           array( $this, 'add_ajax_url'            ), 1 );
			add_filter( 'body_class',           array( $this, 'custom_body_class'       ) );
			add_filter( 'tiny_mce_before_init', array( $this, 'custom_editor_settings'  ) );
		}

		/**
		 * ajax url
		 *
		 * @since 0.0.1
		 */
		public function add_ajax_url() {
			$url = admin_url( 'admin-ajax.php' );
			?>
			<script>
				var ajaxurl = "<?php echo $url; ?>";
			</script>
			<?php
		}

		/**
		 * Version check for Internet Explorer.
		 *
		 * @param int $ver
		 * @return bool
		 * @since 0.0.1
		 */
		static function is_lt_ie( $ver = 9 ) {
			$agent = getenv( 'HTTP_USER_AGENT' );

			if ( strstr( $agent, 'MSIE' ) ) {
				if ( 9 == $ver ) {
					if ( strstr( $agent, 'MSIE 6.0' ) || strstr( $agent, 'MSIE 7.0' ) || strstr( $agent, 'MSIE 8.0' ) || strstr( $agent, 'MSIE 9.0' ) ) {
						return true;
					}
				} elseif ( 8 == $ver ) {
					if ( strstr( $agent, 'MSIE 6.0' ) || strstr( $agent, 'MSIE 7.0' ) || strstr( $agent, 'MSIE 8.0' ) ) {
						return true;
					}
				} elseif ( 7 == $ver ) {
					if ( strstr( $agent, 'MSIE 6.0' ) || strstr( $agent, 'MSIE 7.0' ) ) {
						return true;
					}
				} elseif ( 6 == $ver ) {
					if ( strstr( $agent, 'MSIE 6.0' ) ) {
						return true;
					}
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		/**
		 * Output the currently displayed URL.
		 *
		 * @return string
		 * @since 0.0.1
		 */
		static function current_url() {
			return esc_url( $_SERVER['SCRIPT_URI'] );
		}

		/**
		 * Add the page slug to the class attribute of the Body tag.
		 *
		 * @param string $classes
		 * @return array|string
		 * @since 0.0.1
		 */
		public function custom_body_class( $classes = '' ) {
			global $wp_query;
			if ( is_post_type_archive() ) {
				$slug      = $wp_query->query_vars['post_type'];
				$classes[] = 'page-' . $slug;
			} elseif ( is_tax() ) {
				$slug      = get_taxonomy( get_query_var( 'taxonomy' ) )->object_type[0];
				$classes[] = 'page-' . $slug;
			} elseif ( is_404() ) {
				$slug      = $wp_query->query_vars['post_type'];
				$classes[] = 'page-' . $slug;
			} elseif ( is_page() || is_singular() ) {
				$page = get_post( get_the_ID() );
				$slug = get_post_type( get_the_ID() );
				if ( $page ) {
					$classes[] = 'page-' . $slug;
					$classes[] = 'page-' . $page->post_name;
					if ( $page->post_parent ) {
						$classes[] = 'page-' . get_page_uri( $page->post_parent );
					}
				}
			}
			return $classes;
		}

		/**
		 * Convert the day of the week from the number.
		 *
		 * @param $weekday
		 *
		 * @return mixed
		 * @since 0.0.1
		 */
		static function get_weekday( $weekday ) {
			$weeks = array(
				__( 'Sun', 'leben' ),
				__( 'Mon', 'leben' ),
				__( 'Tus', 'leben' ),
				__( 'Wed', 'leben' ),
				__( 'Thr', 'leben' ),
				__( 'Fri', 'leben' ),
				__( 'Sat', 'leben' ),
			);

			return $weeks[$weekday];
		}

		/**
		 * @param $initArray
		 *
		 * @return mixed
		 */
		public function custom_editor_settings( $initArray ) {
			$page = get_post( get_the_ID() );
			$body_class = '';

			if ( '' != $page->post_type ) {
				$body_class .= 'page-' . $page->post_type;
			}
			if ( '' != $page->post_name ) {
				if ( '' !== $body_class ) {
					$sep = ' ';
				} else {
					$sep = '';
				}
				$body_class .= $sep . 'page-' . $page->post_name;
			}

			$initArray['body_id']           = 'primary';
			$initArray['body_class']        = $body_class;
			$initArray['valid_children']    = '+body[style],+div[div|span],+span[span]';
			$initArray['verify_html']       = false;
			return $initArray;
		}

	}

	new CoUtilities();
}