<?php get_header(); ?>

	<?php if (have_posts()) : ?>
<div class="posts-wrap"> 

		<?php while (have_posts()) : the_post(); ?>
				<?php if ( in_category('785') ) { ?>
<div class="tumblr">

 <div class="imagen">
 <?php $files = get_children("post_parent=$id&post_type=attachment&post_mime_type=image");
 if($files){ $keys = array_keys($files); $num=$keys[0];$thumb=wp_get_attachment_thumb_url($num);
 print "<img src='$thumb' width='50' height='50' alt='".get_the_title()."' />";
 }else{
 print "<img src='http://blog.danielm.eu/wp-content/themes/plantillapropia/imagenes/tumblricon2.png' width='81' height='66' alt='".get_the_title()."' />";
 }?>
 </div>

 <div class="texto">
 <?php the_content( __('sigue leyendo &raquo;', 'blank')); ?>
 </div>
	<div class="ptelem">Tra&iacute;do desde <a href='<?php the_guid(); ?>' title="danielm.tumblr.com">tumblr</a> el <?php the_time('d.m.Y') ?> a las <?php the_time('g:i a') ?></div>
 <div class="clear"></div>
</div>

<?php } else { ?>

    <div class="post post-index" id="post-<?php the_ID(); ?>">
    
        <h2 class="entry-title index-entry-title">
       <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> <small class="fecha"><?php the_time('dMy') ?></small>
        </h2>

				
	<div class="postsintitulo">		
         <div class="entry-content">
			<?php the_content( __('sigue leyendo &raquo;', 'blank')); ?>
			</div><!-- end .entry-content -->      
			 <div class="entry-meta">
	
    			<?php the_tags( __('tags: ', 'blank'), ", ", " | ") ?>
        		<?php _e('categor&iacute;a: ', 'blank'); ?><?php the_category(', ', ' | ') ?><?php _e(' | '); ?>
        		<?php comments_popup_link( __( 'ning&uacute;n comentario', 'blank' ), __( '1 comentario', 'blank' ), __( '% comentarios', 'blank' ), 'comments-link', __('Comments closed', 'blank')); ?>      
        		<?php edit_post_link( __('editar'), ' | ', ''); ?>
 	 </div><!-- end .entry-meta -->          
    	 </div>
	</div>
<!-- end .post -->
        <?php } ?>
		<?php endwhile; ?>        
		<div class="navigation navigation-index">
			 <?php wp_pagenavi(); ?>
		</div>

	<?php else : ?>

		<h2><?php _e('Si no encuentras lo que buscas, quiz&aacute;s hayamos hecho obras', 'blank'); ?></h2>
		<div class="search-404">
		<?php _e('Quieres buscarlo abajo?', 'blank'); ?><br />
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		</div>
        
	<?php endif; ?>
 </div><!-- end .posts-wrap -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
