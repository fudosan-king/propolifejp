<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
		<?php
			if ( is_single() ) :
				the_title( sprintf( '<a href="%s"><h4>', esc_url( get_permalink() ) ), sprintf( '<span>%s</span></h4></a>', get_the_date() ) );
			else :
				the_title( sprintf( '<div class="items"><a href="%s"><h4>', esc_url( get_permalink() ) ), sprintf( '<span>%s</span></h4></a>', get_the_date() ) );
			endif;
		?>
          <div class="itembody">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
          </div>
          <div class="itemftr">
		<?php twentyfifteen_entry_meta(); ?><br>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
          </div></div>

