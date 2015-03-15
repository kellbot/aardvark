<!DOCTYPE html>
<html>
<head>
<title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<div class="row">
			<div id="main-column" class="col-md-9 col-md-push-3">
				<nav  id="blog-menu" class="green navbar navbar-default" role="navigation">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
			<?php wp_nav_menu(array('theme_location' => 'top',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
								'menu_class'        => 'nav navbar-nav nav-justified',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())); ?>
						

				</nav>
			
