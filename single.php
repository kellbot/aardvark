<?php get_header(); ?>
	<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>

				<div <?php post_class('col-md-12'); ?>>
					<article>
						<h2><a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a></h2>
						<?php the_content(); ?>
						<?php comments_template( '', true ); ?>
					</article>
				</div>

			<?php endwhile; ?>
		<?php else: ?>
			Sorry, nothing found. 
			<?php if (!is_user_logged_in()): ?>
				Some posts require you to <a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">Login</a>.
			<?php endif; ?>
		<?php endif; ?>
<?php get_footer(); ?>