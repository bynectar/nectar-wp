<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<?php if ( 'gallery' == get_post_type() ) : ?><!-- POST TYPE SWITCH -->
	<?php if (is_single()) : ?>
		<div class="gallery-set">
			<a href="<?php the_permalink() ; ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('gallery-thumb'); ?></a>
			<div class="gallery-text">
				<h2 class="slab"><a href="<?php the_permalink() ; ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php else : ?>
		<div class="gallery-set">
			<a href="<?php the_permalink() ; ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('gallery-thumb'); ?></a>
			<div class="gallery-text">
				<h2 class="slab"><a href="<?php the_permalink() ; ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt(); ?>
				<a class="read-link" href="<?php the_permalink() ; ?>" title="<?php the_title() ?>">See more &raquo;</a>
			</div>
		</div>
	<?php endif; ?>

<?php elseif ( 'post' == get_post_type() ) : ?><!-- POST TYPE SWITCH -->

	<?php if (is_home()) : ?>

		<article class="article-wrap article-wrap-home">
			<div class="titleblock titleblock-home">
				<div class="relative">
					<h4 class="catlabel">From the <a href="<?php echo esc_url( home_url( '/' ) ); ?>alamode">Blog</a></h4>
					<h2 class="slab"><a href="<?php the_permalink() ; ?>"><?php the_title() ?></a></h2>
				</div>
			</div>
			<hr class="space clearfix">
			<div class="article-text article-home">
				<?php the_excerpt(); ?>
				<hr>
				<p id="readmore"><a href="<?php the_permalink() ; ?>" title="<?php the_title() ?>">Read more &raquo;</a><br></p>
			</div>
		</article><!-- #post-<?php the_ID(); ?> -->
		
	<?php else : ?>
	
		<article class="article-wrap">
			<div class="relative">
				<?php the_post_thumbnail('article-thumb'); ?>
				<div class="titleblock">
					<h4 class="catlabel"><?php the_date(); ?></h4>
					<h2 class="slab"><a href="<?php the_permalink() ; ?>"><?php the_title() ?></a></h2>
				</div>
			</div>
			<div class="article-text article-excerpt">
				<?php the_excerpt(); ?>
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
				<span class="read-link">
					<a href="<?php the_permalink() ; ?>" title="<?php the_title() ?>">Read more &raquo;</a>
				</span>
			</div>
		</article><!-- #post-<?php the_ID(); ?> -->
		
	<?php endif; ?>
	
<?php endif; ?><!-- POST TYPE SWITCH -->


