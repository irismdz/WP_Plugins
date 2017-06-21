<?php
/*
Plugin Name: imdz-hello-world
Plugin URI: http://fwdisfwd.com/
Description: A hello world plugin demonstration. Will display on home page. 
Version: 1.0
Author: Iris Melendez
Author URI: http://fwdisfwd.com
License: GPL
*/ 

// Hooks a function to a filter action, 'the_content' being the action, 'hello_world' the function
add_filter('the_content', 'imdz_hello_world');

// Callback function
function imdz_hello_world($content)
{
  // Checking if on front page (is_front_page). Note: is_home works differently. Post page (is_single).
  if (is_front_page())
  {
  	// Adding custom content to top of home page (centered)
	return "<h1 align='center'> Hello World! I'm a plugin </h1>" . $content;
  }
  
  else
  {
  	// else on any other page just return content as usual
	return $content;
  }
}
?>