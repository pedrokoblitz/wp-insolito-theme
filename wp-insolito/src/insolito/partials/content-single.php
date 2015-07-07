<?php
/** content-single.php
 *
 * The template for displaying content in the single.php template
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */


tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tha_entry_top(); ?>
	
	<header class="page-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<div class="entry-meta"><?php //the_bootstrap_posted_on(); ?></div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content clearfix">
		<?php
		the_content();
		//the_bootstrap_link_pages(); ?>
	</div><!-- .entry-content -->
	
	<?php tha_entry_bottom(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php tha_entry_after();

/* End of file content-single.php */
/* Location: ./wp-content/themes/the-bootstrap/partials/content-single.php */
