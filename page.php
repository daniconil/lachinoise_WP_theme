<?php get_header(); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="posts-wrap"> 

<div class="post" id="textopagina">
		
			<div class="entry-content" id="page-content">
			
				<?php the_content('<p class="serif">Lee el resto de la p&aacute;gina &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div><!-- end #page-content -->

	</div><!-- end #page -->
    
			<?php endwhile; endif; ?>
            
	<?php edit_post_link( __('editar', 'blank'), '<p>', '</p>'); ?>
 </div><!-- end .posts-wrap -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
