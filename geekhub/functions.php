<?php 


if (function_exists('register_sidebar'))
	register_sidebar(array('name' => 'Sidebar'));

	
	add_theme_support('post-thumbnails'); // поддержка миниатюр
	set_post_thumbnail_size(100, 100, true);

?>