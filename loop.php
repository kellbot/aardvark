<div <?php post_class('row'); ?>>
	<div class="bigtitle col-sm-6">
		<h3>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
	</div>
	<div class="content col-sm-6">
		<?php the_excerpt(); ?>
	</div>

</div>