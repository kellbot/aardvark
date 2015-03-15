		</div>
		<div class="left-sidebar-container col-md-3 col-md-pull-9">
			<?php get_sidebar(); ?>

		</div>
</div><!-- end row -->
<div id="footer-menu">
	<div class="container">
	<?php wp_nav_menu(array('theme_location' => 'footer',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())); ?>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
