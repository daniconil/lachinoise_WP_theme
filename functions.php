<?php load_theme_textdomain('blank'); ?>
<?php function
the_thumb($size = "small", $add = ""){
global $wpdb, $post;
$thumb = $wpdb->get_row("SELECT ID, post_title FROM {$wpdb->posts} WHERE post_parent = {$post->ID} AND post_mime_type LIKE 'image%' ORDER BY menu_order");
if(!empty($thumb))
$image = image_downsize($thumb->ID, $size);
else
$image[0] = "img.png";
print "<img src='{$image[0]}' alt='{$thumb->post_title}' {$add} />";}
?>
<?php
if ( function_exists('register_sidebars') )
	register_sidebars(2, array(
		'name'=>'Sidebar %d',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
	
	if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Cabecero',
'before_widget' => '<div class="cabecero">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

	if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Pie',
'before_widget' => '<div class="pie">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

?>
<?php function custom_comment($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">
<?php comment_author_link() ?> <?php _e('dice', 'blank'); ?>: 

<?php if ($comment->comment_approved == '0') : //message if comment is held for moderation ?>
<em><?php _e('Your comment is awaiting moderation', 'blank'); ?>.</em>
<?php endif; ?>

<br />
<small class="commentmetadata">
<?php comment_date('l, j F, Y') ?> <?php _e('a las', 'blank'); ?> <?php comment_date('G:i') ?><?php edit_comment_link( __('editar', 'blank'),' &nbsp;|&nbsp; ',''); ?></small>
<br />
	<?php comment_text() ?>
 <div class="reply">
<?php echo comment_reply_link(array('reply_text' => __('responder al comentario', 'blank'), 'depth' => $depth, 'max_depth' => $args['max_depth']));  ?>
</div>
<?php } ?>
<?php function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID( ); ?>">
     <?php _e('Trackback from', 'blank'); ?> <em><?php comment_author_link() ?></em>
     <br /><small><?php comment_date('l, j F, Y') ?></small>
     <br /><?php comment_text() ?>
     <?php edit_comment_link( __('editar', 'blank'),'<br /> &nbsp;|&nbsp; ',''); ?>
<?php } ?>
<?php
add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	global $id;
	$comments_by_type = &separate_comments(get_comments('post_id=' . $id));
	return count($comments_by_type['comment']);
}
?>
<?php 

function oracion_aleatoria() {
$quotes = array(
"Amantes en secreto de Jean Seberg",
"La guerrilla china fiel a Vietnam contra los Jemeres Rojos",
"Permitido poner carteles",
"Pagamos la cuota en la Wu Ming Foundation",
"Dem&oacute;cratas de toda la vida",
"Somos Panteras Negras de ojos rasgados",
"Angela Davis gure laguna da",
"Esto no es una pel&iacute;cula de Jean-Luc Godard"
);

echo $quotes[rand(0, count($quotes) - 1)];
}
?>