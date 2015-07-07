<?php
/** 
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 07.02.2012
 */


tha_entry_before(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content clearfix">

			<h1 class="texto-bomba"><?php echo strip_tags(get_the_content(),'<del><br><span>'); ?></h1>
			<?php the_bootstrap_link_pages(); ?>

		</div><!-- .entry-content -->

	<?php tha_entry_bottom(); ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php tha_entry_after();


