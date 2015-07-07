<?php
/** content-image.php
 *
 * The template for displaying posts in the Image Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */


tha_entry_before(); ?>
	<?php //tha_entry_top(); ?>
	
		<?php
		if (has_tag('rounded')) {
			echo str_replace('<img ','<img class="img-rounded"', get_the_content());
		} elseif (has_tag('polaroid'))  {
			echo str_replace('<img ','<img class="img-polaroid"', get_the_content());
		} elseif (has_tag('circle'))  {
			echo str_replace('<img ','<img class="img-circle"', get_the_content());
		} else {
			the_content();
		}
		the_bootstrap_link_pages(); ?>

	<!--footer class="entry-footer">
		<?php //the_bootstrap_posted_on(); ?>
	</footer--><!-- .entry-footer -->
	
	<?php tha_entry_bottom(); ?>

<?php tha_entry_after();


/* End of file content-image.php */
/* Location: ./wp-content/themes/the-bootstrap/partials/content-image.php */
