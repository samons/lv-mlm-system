<?php

/*
 *
 * Cheap defines, variables and functions
 *
 */


// DEFINE(s)

/* Usage example: <?= GET_JQUERY ?> */
define('GET_JQUERY', HTML::script('/assets/js/jquery.js') ); 


// FUNCTION(s)

/* Usage example: <?php get_jquery(false); ?> || <?= get_jquery(); ?> */
function get_jquery($echo = false) 
{
	if ($echo == true) {
		echo HTML::script('/assets/js/jquery.js');
	}
	else {
		return HTML::script('/assets/js/jquery.js');
	}
} 
