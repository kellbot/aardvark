<?php get_header(); ?>
	<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>

				<div <?php post_class('row'); ?>>
					<div class="col-md-12">
						<h2><a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a></h2>
						<?php the_content(); ?>
						<?php comments_template( '', true ); ?>
					</div>
				</div>

			<?php endwhile; ?>
			<?php endif; ?>
<?php get_footer(); ?>