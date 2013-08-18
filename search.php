<?php get_header(); ?>

    <div class="posts-wrap"> 
	<?php if (have_posts()) : ?>

    	<h2 id="search search-nothing"><?php _e('Resultados:', 'blank'); ?> </h2>
        
		<?php while (have_posts()) : the_post(); ?>
	
    <div class="post post-index" id="post-<?php the_ID(); ?>">
    
        <h2 class="entry-title index-entry-title">
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> <small class="fecha"><?php the_time('dMy') ?></small>
        </h2>
			
            <div class="entry-content entry-content-index">
					<?php the_content( __('Read the rest of this entry &raquo;', 'blank')); ?>
			</div><!-- end .entry-content -->
            
     <div class="entry-meta entry-meta-index">
	
    	<?php the_tags( __('tags: ', 'blank'), ", ", " | ") ?>
        		<?php _e('categor&iacute;a: ', 'blank'); ?><?php the_category(', ', ' | ') ?><?php _e(' | '); ?>
        		<?php comments_popup_link( __( 'ning&uacute;n comentario', 'blank' ), __( '1 comentario', 'blank' ), __( '% comentarios', 'blank' ), 'comments-link', __('Comments closed', 'blank')); ?>      
        
        <?php edit_post_link( __('editar'), ' | ', ''); ?>
 
      </div><!-- end .entry-meta -->
     </div><!-- end .post -->
        
		<?php endwhile; ?>
        
		<div class="navigation navigation-index">
			<div class="nav-prev"><?php next_posts_link( __('&laquo; Viejas', 'blank')) ?></div>
			<div class="nav-next"><?php previous_posts_link( __('Nuevas &raquo;', 'blank')) ?></div>
		</div>

		

	<?php else : ?>

		<h2 id="search search-nothing"><?php _e('Lo sentimos, no lo hemos encontrado. Prueba a buscar otra cosa.', 'blank'); ?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
</div><!-- end .posts-wrap -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
