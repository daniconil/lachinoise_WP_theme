<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="posts-wrap"> 

		<div class="navigation" id="nav-single">
			<div class="nav-prev nav-prev-single"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="nav-next" id="nav-next-single"><?php next_post_link('%link &raquo;') ?></div>
		</div>
        
<div class="post" id="post-single">
		
		<h2 class="entry-title" id="entry-title-single"><?php the_title(); ?> <small class="fecha"><?php the_time('dMY') ?></small></h2>

			<div class="entry-content">
				<?php the_content('<p class="serif">Sigue leyendo &raquo;</p>'); ?>
              
                	</div><!-- end .entry-content -->
				
			

			<div class="entry-meta-single"> <div class="metadatos">	<?php the_tags( __('', 'blank'), "  " ) ?>
                  	
					<?php _e('', 'blank'); ?><?php the_category(', ') ?> 
   </div> <!-- boton facebook -->


			
              				
					

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
						

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Only Pings are Open ?>
							<?php _e('Comments are currently closed, but you can', 'blank'); ?> <a href="<?php trackback_url(); ?> " rel="trackback"><?php _e('trackback', 'blank'); ?></a> <?php _e('from your own site', 'blank'); ?>.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>                            
							<?php _e('You can skip to the end to leave a comment. Trackbacks are currently not allowed.', 'blank'); ?>
                            
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							<?php _e('Both comments and trackbacks are currently closed.', 'blank'); ?>
                            
                            <?php } edit_post_link( __('Edit'), '  ', ''); ?>
						
					</div> <!-- end .entry-meta -->
				
</div><!-- end .post -->		
		
	<?php comments_template('', true); ?>

	<?php endwhile; else: ?>

		<?php _e('Sorry, no posts matched your criteria', 'blank'); ?>.

<?php endif; ?>
 </div><!-- end .posts-wrap -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
