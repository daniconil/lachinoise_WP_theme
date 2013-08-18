<?php get_header(); ?>

	<div class="posts-wrap">
	<div class="error404">
		<h1><?php _e('Error 404 - Lo que buscas, aqu&iacute; no est&aacute;', 'blank'); ?></h1>
		
        <h2><?php _e('Lo que buscas puede ser que lo haya borrado o movido a otro sitio.', 'blank'); ?></h2>

		<?php _e('Usa el buscador', 'blank'); ?>?
        <br />
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
