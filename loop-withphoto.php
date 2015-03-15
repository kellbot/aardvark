<div <?php post_class('row'); ?>>
	<div class="thumbnail-area col-sm-6">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('post-thumbnail', array('class'=>'img-responsive')); ?>
		</a>
	</div>
	<div class="content col-sm-6">
		<h3>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<?php the_excerpt(); ?>
	</div>
	<div class="infobar col-sm-6"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?>
		</div>
</div>