<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>"  class="article-wrap">
	<div class="relative">
		<?php the_post_thumbnail('article-head'); ?>
		<div class="titleblock">
			<h4 class="catlabel"><?php the_date(); ?></h4>
			<h1 class="slab singletitle"><?php the_title() ?></h1>
			<h4 class="catlabel byline">By Misty Florez</h4>
		</div>
		<div class="socialblock">
			<a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=180764915330156&amp;xfbml=1"></script><fb:like href="" send="true" layout="box_count" width="40" show_faces="false" action="like" font="tahoma"></fb:like>
		</div>
	</div>
	<?php the_post_thumbnail_caption(); ?>
	<div class="article-text article-single">
		<?php the_content(); ?>
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
			if ( $categories_list ):
		?>
		<span class="cat-links">
			<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
			$show_sep = true; ?>
		</span>
		<?php endif; // End if categories ?>
		
		<hr class="space">
		<div>
			<a href="http://www.facebook.com/ByNectar/" alt="Like Nectar on Facebook">
				<h2 id="cta-button">Like us on Facebook <u>Here</u>.</h2>
			</a>
		</div>
		
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
