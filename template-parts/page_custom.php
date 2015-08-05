<?php
/**
 * Template Name: Category Image
 *
 * @package Fluffy
 * 
 */
 
 ?>
	<div id="gridcontainer">
 <?php 
	
	get_header();
	
	$counter = 1;
	$grid = 2;	
	
	$uncat = array('post_type=location', 'showposts' => 4, 'order' => 'ASC' );
	$my_query = new WP_Query($uncat);
	
	if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
		
	
 ?>


<?php
	if($counter == 1) :
?>

		<div class="griditemleft">
			
			<h2>
				<a <?php the_title(); ?></a>
			</h2>
			<div class="postimage">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			</div>
            
			
		</div>
<?php

	elseif($counter == $grid) :
?>
		<div class="griditemright">
			
			<h2>
				<a href="<?php the_title(); ?></a>
			</h2>
			
			<div class="postimage">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
			</div>
			
			
		</div>
	<div class="clear"></div>
	
<?php 
	
	$counter = 0;
	
	endif; 
	
	$counter++;
	
	endwhile;
	
	endif;
?>
	</div>

	<div id= "customfooter"> <?php get_footer(); ?> </div>


	<nav class="navigation posts-navigation" role="navigation">
		<div class="nav-links">
			
			<div class="nav-previous"><?php next_posts_link('&larr; Old Stuff', 'underscores'); ?></div>
				
			<div class="nav-next"><?php previous_posts_link( 'New Stuff &rarr;', 'underscores'); ?></div>
			
		</div>
	</nav>