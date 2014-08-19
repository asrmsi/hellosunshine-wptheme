<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package staunch
 */
?>

	</div><!-- #content -->
	</div>
	<div class="spat">
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="lower-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<div class="copyright">
			<p>&copy; 2014 Antonette Scott. All rights reserved on photographs &amp; content, unless otherwise specified. Please <a href="contact/">contact me</a> for usage details &amp; rates.</p>
		</div>
		<div class="site-info">
			<p><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'staunch' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'staunch' ), 'WordPress' ); ?></a></p>
			<div class="social-media-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
			</div>
		</div><!-- .site-info -->
		<div class="tech">
			<p>Site designed, developed and hosted by <a href="//howlinghoundstudios.com/" target="new">Howling Hound Studios</a>.</p>
		</div>
	</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-52481944-1', 'auto');
	ga('send', 'pageview');
</script>
</body>
</html>
