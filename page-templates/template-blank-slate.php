<?php
/*  Template Name: Blank Slate
 *
 * This template can be used if you do not want anything inside the body tag so as you can add it
 * all on your own from a page content.
 *  
 */
?>

<?php

	get_header();
		
	if (have_posts()) {
		
		while (have_posts()) {
			
			the_post();
			
			the_content(); 
			
		}
		
	}

	get_footer(); 

?>
