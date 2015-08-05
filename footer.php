<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package clickture
 */

?>

		</div><!-- #content -->

	
		<div class="container">
		
		<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="bottomMenu">
              <?php
//this section of code creates the menu at the bottom of the page, inside the footer
wp_nav_menu(array(
    'theme_location' => 'secondary'
));
?>  
    </div>
	        <div id="footer-widgets">
	            <?php
if (is_active_sidebar('footer')):
?>
	                <aside id="widget-foot" class="widget-foot">
	                    <?php
    dynamic_sidebar('footer');
?>
	                </aside>
	            <?php
endif;
?>
	        </div><!-- end #footer-widgets -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clickture' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'clickture' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'clickture' ), 'clickture', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
