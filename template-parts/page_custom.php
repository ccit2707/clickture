<?php
/**
 * Template Name: Category Image
 *
 * 
 * 
 */
 
 ?>
	<div id="gridcontainer">
 
		<div id="header">
		<?php
			get_header();
			
			$counter = 1;
			$grid = 2;	
			 
				query_posts(array( 
					'post_type' => 'portfolio',
					'showposts' => 4 
			) ); 
		?>		
		</div>
	<?php while (have_posts()) : the_post(); 
        if ($counter == 1)
		{
	?>		<h3> <a href=" <?php the_permalink() ?> "> <?php the_title(); ?> </a></h3>
			<p> <?php echo get_the_excerpt(); ?> </p>
	<?php	
		}
        else if ($counter == $grid)
		{
	?>		<h2> <a href=" <?php the_permalink() ?> "> <?php the_title(); ?> </a> </h2>
			<p> <?php echo get_the_excerpt(); ?> </p>
	<?php
		}
		
		
		$counter == 1;
		
		endwhile;
	?>
	<div id= "customfooter"> <?php get_footer(); ?> </div>
	</div>

