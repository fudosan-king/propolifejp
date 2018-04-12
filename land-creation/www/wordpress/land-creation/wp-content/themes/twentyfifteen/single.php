<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="items">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<img src="http://www.landcreation.co.jp/static/img/blog/btn_next_ontxt.png" width="57" height="24" alt="next"> %title',
				'prev_text' => '%title <img src="http://www.landcreation.co.jp/static/img/blog/btn_prev_ontxt.png" width="57" height="24" alt="next">',
			) );

		// End the loop.
		endwhile;
		?>

</div>
<?php get_footer(); ?>
