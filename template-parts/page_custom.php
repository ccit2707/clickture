<?php
/**
 * Template Name: Category Image
 *
 * 
 * 
 */
 
 ?>
	<div id="header">
		<?php get_header(); ?>
	</div>	
		
	<div id="gridcontainer">
		<?php
			$counter = 1;
			$grid = 2;	
			 
			
			$args = array('post_type' => 'locations', 'showposts' => 4, 'order' => 'ASC' );
			$my_query = new WP_Query($args);
		?>		
		
	<?php 
	if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
	

        if ($counter == 1)
		{
	?>		<div id="gridleft">
			<h3> <a href=" <?php the_permalink() ?> "> <?php the_title(); ?> </a></h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
			</div>
	<?php	
		}
        else if ($counter == $grid)
		{
	?>		
			<div id="gridleft">
			<h2> <a href=" <?php the_permalink() ?> "> <?php the_title(); ?> </a> </h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
			</div>
	<?php
		}	
		$counter == 1;
		
		endwhile;
		endif;
	
	?>
	</div>
	
	<div id="customfooter"> <?php get_footer(); ?> </div>
	</div>
