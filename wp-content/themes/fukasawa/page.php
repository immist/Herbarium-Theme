<?php get_header(); ?>

<div class="content thin">		

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
	
		<div <?php post_class('post single'); ?>>
			
			<div class="post-inner">
												
				<div class="post-header">
																										
					<h2 class="post-title"><?php the_title(); ?></h2>
															
				</div> <!-- /post-header section -->
				    
			    <div class="post-content">
			    
			    	<?php the_content(); ?>
					
			    	<?php wp_link_pages('before=<div class="clear"></div><p class="page-links">' . __('Pages:','fukasawa') . ' &after=</p>&seperator= <span class="sep">/</span> '); ?>
			    
			    </div>
	
			</div> <!-- /post-inner -->
			
			<?php if ( comments_open() ) : ?>
												
				<?php comments_template( '', true ); ?>
						
			<?php endif; ?>
		
		</div> <!-- /post -->
		
	<?php endwhile; else: ?>
	
		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "fukasawa"); ?></p>

	<?php endif; ?>

	<div class="clear"></div>
	
</div> <!-- /content -->
								
<?php get_footer(); ?>