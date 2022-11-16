<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheSetup-Practice01
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-column-1">
		<?php
		// this code drags the nav menu to the footer
            wp_nav_menu(array(
                'menu' => 'Nav Menu',
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-id'
            ))
        ?>

		</div>
		<div class="footer-column-2"> 
			<p>facebook</p>
			<p>twitter</p>
			<p>instagram</p>
			
		</div>
		
		
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
