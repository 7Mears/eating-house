<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Eating House
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'eating-house' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'eating-house' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<?php printf( __( 'Theme: %1$s by %2$s.', 'eating-house' ), 'Eating House', '<a href="http://www.jordanmears.com" rel="designer">Jordan Mears</a>' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
