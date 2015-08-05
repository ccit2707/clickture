<?php
wp_list_comments( array( 'avatar_size' => '50' ) );
//this changes the avatar size of the gravatar icon to 50px, for after comments 

add_filter( 'avatar_defaults', 'fluffy_child_custom_gravatar' );
//This sets up the child-theme's custom gravatar 

echo get_avatar( '/imgs/luna.png', 50 );
//this tells the page which image to display, my custom luna gravatar png 
?>