<?php get_header(); ?>
<div id="posts" class="container">
	<div class="row">
		
		<div class="col-lg-9">
			<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php // if (has_post_thumbnail()){
						get_template_part('loop','withphoto');
					//} else {
					//	get_template_part('loop'); 
					//}?>
				
			<?php endwhile; ?>
			<div id="pagination" class="row">
				<?php
				global $wp_query;

				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages,
					'mid_size' => 4
				) );
				?>
			</div>
			<?php else: ?>
			<p>Nothing found. </p>
				<?php if (!is_user_logged_in()): ?>
					<p>Some posts require you to <a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Login</a> via Facebook, Twitter, or Wordpress account. If this is your first time
						logging in please <a href="http://www.kellbot.com/friend-stuff/">see here for more details</a>.</p>
				<?php endif; ?>
			<?php endif; ?>
		</div>

	</div>
</div>
<?php get_footer(); ?>