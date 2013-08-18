<div class="sidebar-wrap">

<?php if(is_single() ) { ?>


  <?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>    						
			<?php endif; /* End of widgetized sidebar */ ?>
<div class="sidebar block-2-single">

  












<?php } elseif(is_page()||is_category()||is_tag()||is_search()) { ?>


<div class="sidebar block-2-single">

   
      <?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>    						
			<?php endif; /* End of widgetized sidebar */ ?>


</div>


<?php } else { ?>


<div class="sidebar block-1">        
      <?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>    						
			<?php endif; /* End of widgetized sidebar */ ?>
</div><!-- end .block-1 -->
<div class="sidebar block-2">        
      <?php	/* Widgetized sidebar */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>    						
			<?php endif; /* End of widgetized sidebar */ ?>
</div><!-- end .block-2 -->
   
    

<?php } ; ?>








</div>
</div> <!-- end .sidebar-wrap -->

