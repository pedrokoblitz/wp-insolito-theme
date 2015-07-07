<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php tha_head_top(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="google-site-verification" content="ePTRA2rGvd15KV0mCptzPYdwsPOKkXIpbajmUTRtAi0" />
	
		<title><?php wp_title( '&laquo;', false, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400' rel='stylesheet' type='text/css'>
		<?php tha_head_bottom(); ?>
		<?php wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?>>

		<div class="container">

			<div id="page" class="hfeed row">
				<?php tha_header_before(); ?>

				<header id="cabecalho" role="banner" class="span12">
					<hgroup>
						<h1 id="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
							</a>
						</h1>
						<!--h2 id="site-description"><?php bloginfo( 'description' ); ?></h2-->
					</hgroup>

					<?php tha_header_top(); ?>

					<?php tha_header_bottom(); ?>

				</header><!-- #branding -->

					<?php tha_header_after(); ?>
<?php
/* End of file header.php */
/* Location: ./wp-content/themes/the-bootstrap/header.php */
?>
