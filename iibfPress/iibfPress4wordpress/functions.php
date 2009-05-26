<?

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => __('sidebar','theme239'),
		'before_widget' => '<div id="%1$s" class="widget_style">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));


// Links

function widget_links_with_style() {
			?>
			<div class="widget_style" id="links_with_style">
								<ul>
									<?php wp_list_bookmarks(); ?>
								</ul>
							</div>
   <?
   }
   if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__(' Links With Style'), 'widget_links_with_style');


// Search 	
	function widget_theme239_search() {
?>
						<div id="search"><?php include (TEMPLATEPATH . "/searchform.php"); ?></div>
					
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_theme239_search');

   
   
?>
