<?php get_header(); ?>
<div class="posts-wrap"> 

		<?php if (have_posts()) : ?>
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <h2 class="archive-title">
	  <?php /* If this is a category */ if (is_category()) { ?>
		<?php _e('categor&iacute;a', 'blank'); ?> &#8220;<?php single_cat_title(); ?>&#8221;
 	
      <?php /* If this is a tag */ } elseif( is_tag() ) { ?>
		<?php _e('entradas etiquetadas con', 'blank'); ?> &#8220;<?php single_tag_title(); ?>&#8221;
 	  
	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<?php _e('archivo de', 'blank'); ?> <?php the_time('F jS, Y'); ?>
 	 
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<?php _e('archivo de', 'blank'); ?> <?php the_time('F, Y'); ?>
 	 
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		  <?php _e('archivo de', 'blank'); ?> <?php the_time('Y'); ?>
	
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		 <?php _e('archivo del autor ', 'blank'); ?>
    
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		 <?php _e('Archivos del blog ', 'blank'); ?>
 	  <?php } ?>
	</h2>



<?php while (have_posts()) : the_post(); ?>
	
    <div class="post post-index" id="post-<?php the_ID(); ?>">
    
        <h2 class="entry-title index-entry-title">
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><small class="fecha"><?php the_time('dMy') ?></small>
        </h2>

				
		<div class="postsintitulo">	
            <div class="entry-content entry-content-index">
					<?php the_content( __('Read the rest of this entry &raquo;', 'blank')); ?>
			</div><!-- end .entry-content -->
            
   	  <div class="entry-meta" id="entry-meta-index">
	
    			<?php the_tags( __('tags: ', 'blank'), ", ", " | ") ?>
        		<?php _e('categor&iacute;a: ', 'blank'); ?><?php the_category(', ', ' | ') ?><?php _e(' | '); ?>
        		<?php comments_popup_link( __( 'ning&uacute;n comentario', 'blank' ), __( '1 comentario', 'blank' ), __( '% comentarios', 'blank' ), 'comments-link', __('Comments closed', 'blank')); ?>      
        		<?php edit_post_link( __('editar'), ' | ', ''); ?>
      </div>
      </div><!-- end .entry-meta -->
     </div><!-- end .post -->
        
		<?php endwhile; ?>
        
		<div class="navigation">
			  <?php
    			   if (function_exists('wp_pagebar'))
        		  wp_pagebar(); ?>
		</div>

	<?php else : ?>

		<h2><?php _e('La pagina que buscas no existe, quiz&aacute;s haya hecho obras.', 'blank'); ?></h2>
		<div class="search-404">
		<?php _e('Usa el buscador', 'blank'); ?><br />
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		</div>
        
	<?php endif; ?>
 </div><!-- end .posts-wrap -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
