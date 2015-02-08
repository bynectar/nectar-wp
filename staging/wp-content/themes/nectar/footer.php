<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>


</div>

</div><!-- #page -->

	<footer id="colophon" role="contentinfo" class="container">
		<div id="footcol1">
			<nav id="footnav" role="navigation" class="museo">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			<p class="foot-text">&copy; <?php the_date('Y'); ?> Nectar, photos & content on this site are copyright of Nectar unless otherwise noted, and may not be used without permission.<br />
			Website by <a href="http://www.johnthedesigner.com" target="_blank">JohntheDesigner.com</a></p>
			<?php wp_footer(); ?>
		</div>
		<div id="footcol2">
			<p>Member of:<br>
			<a href="http://www.bostonbridallounge.com" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/images/bbl.png" alt="Boston Bridal Lounge">
			</a>
		</div>

	</footer>

</div>

<?php if ( is_home() ) : ?>

	<!--Nectar Vintage/Modern Floral Design,
	professional wedding floral designer in Boston, Massachusetts.
	Don't compromise, beautiful floral design is only one part of the perfect magazine wedding.
	-->

<?php endif; ?>
</body>

<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher:'946460eb-ef0b-419c-99d3-6738b3e57f59'});</script>

<script>
  $(function(){
    $("#slides").slides({
	next: 'next',
	prev: 'prev',
	slideSpeed: 1000,
	slideEasing: "easeOutSine"
  });
  });
</script>
</html>