<?php
/** _full_width.php
 *
 * Template Name: Full Build
 *
 * @author 	Konstantin Obenland
 * @package The Bootstrap
 * @since	1.3.0	- 29.04.2012
 */

get_header(); ?>

	<?php //tha_content_before(); ?>

		<?php //tha_content_top();
		
		the_post();
		get_template_part( '/partials/content', 'page' );
		
		tha_content_bottom(); ?>

	<?php //tha_content_after(); ?>

<?php
get_footer();


/* End of file _full_width.php */
/* Location: ./wp-content/themes/the-bootstrap/_full_width.php */
