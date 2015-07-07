<!DOCTYPE html>
<html class="no-js" lang="en-US">
	<head>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo('name'); ?></title>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400' rel='stylesheet' type='text/css'>
		<meta name='robots' content='noindex,nofollow' />

		<!--[if lt IE 9]>
			<script src="http://ideiasinsolitas.com.br/wp-content/themes/insolito/js/html5shiv.min.js" type="text/javascript"></script>
		<![endif]-->
		
		<?php
			wp_deregister_script('jquery');
			wp_head();
		?>
	</head>
	
	<body>
		
		<div id="app">

				<div class="container">

					<div class="row">

						<div id="primary">

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<!-- -->
								<div id="conteudo"></div>
							</div>

							<div id="capa" class="row">
								
								<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
									<!-- -->
									<div id="itens" class="itens"></div>
								</div>
							
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">	
			
									<h1 id="site-title">
										<a href="#/" title="<?php bloginfo('name'); ?>" rel="home">
											<?php bloginfo('name'); ?>
										</a>
									</h1>
								</div>
								<div id="" class="row">
									<div id="" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

										<!-- -->
										<div id="tag"></div>

										<!-- -->
										<div id="category"></div>

									</div><!-- col -->

								<div id="" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

									<!-- -->
									<div id="post"></div>

								</div><!-- col -->
								
							</div><!-- #row -->
							
						</div><!-- #capa -->

					</div><!-- #primary -->

				</div><!-- #page -->

			</div><!-- .container -->

		</div><!-- #app -->

		<script type="text/javascript" src="<?php bloginfo('url')?>/wp-content/themes/insolito/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('url')?>/wp-content/themes/insolito/js/jquerymx.js"></script>
		<script type="text/javascript" src="<?php bloginfo('url')?>/wp-content/themes/insolito/js/sammy.js"></script>
		<script type="text/javascript" src="<?php bloginfo('url')?>/wp-content/themes/insolito/js/mustache.js"></script>
		<script type="text/javascript" src="<?php bloginfo('url')?>/wp-content/themes/insolito/js/controllers.js"></script>

		<script type="text/javascript">
			new Site($('#app'));
		</script>

	</body>

</html>
