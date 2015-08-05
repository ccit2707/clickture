<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package clickture
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php /* Not sure if we should keep this */  if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
			
		<?php
	
	if ( is_home() ) {
		query_posts('cat=193');
		/*This limits which category is displayed on the home page.  In this instance, I selected category 193, the value appointed to 'Ravenclaw' by WordPress */
	}

	?>	
			<?php
	$tmp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query('showposts=6');
	/* These lines of code determine that only 6 posts will be shown on a page, namely the home page in this instance */
	?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>
	
	<?php 
	the_post_thumbnail();
	/*This line posts the thumbnail of the featured image.  Placing this line of code in this exact position allows the image for all posts to exist immediately above their titles */
	?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

				<?php
 get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php 
	endwhile;
	$wp_query = $tmp;
	?>
			<?php  cd_posts_navigation(); ?>
		<?php  else : ?>
			<?php  get_template_part( 'template-parts/content', 'none' ); ?>
		<?php  endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php  get_sidebar(); ?>
<?php  get_footer(); ?>


