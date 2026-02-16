<div id="system">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<article class="item">
		
			<header>
				
				<h1 class="title">
					<?php the_title(); ?>
				</h1>
	
				
			</header>
			
			<div class="content clearfix">
				<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php the_title_attribute(); ?>"><?php echo wp_get_attachment_image($post->ID, 'full-size'); ?></a>
			</div>
			
			<?php edit_post_link(__('Edit this attachment.', 'warp'), '<p class="edit">','</p>'); ?>

		</article>
		
		<?php comments_template(); ?>

		<?php endwhile; ?>
	<?php endif; ?>

</div>