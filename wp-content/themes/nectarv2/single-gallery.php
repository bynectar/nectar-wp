<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>"  class="gallery-set gallery-single">
						<div id="slides">
							<div class="slides_container">
								<?php
								$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order'    => 'ASC', 'orderby' => 'menu_order') );
								foreach ( $attachments as $attachment_id => $attachment ) {
									echo '<div>';
									$img_url = wp_get_attachment_image_src($attachment_id, 'gallery-spread', true);
									$img_path = urlencode($img_url[0]); ?>
									
									<span class="pin_it"><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.bynectar.com&media=<?php echo $img_path; ?>" class="pin-it-button" count-layout="horizontal">Pin It</a>
									<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script></span>
																		
									<?php echo wp_get_attachment_image($attachment_id, 'gallery-spread', true);
									echo '</div>';
								} ?>
							</div>
							<div class="prev"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.png"></div>
							<div class="next"><img src="<?php echo get_template_directory_uri(); ?>/images/next.png"></div>
						</div>
						<div class="gallery-text gallery-single">

							<h1 class="slab gold"><?php the_title() ?></h1>
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
							
							<div class="box">
								<span class="st_facebook_hcount" st_url="<?php the_permalink(); ?>"></span><span  class="st_twitter_hcount" st_url="<?php the_permalink(); ?>"></span><span class="st_digg_hcount" st_url="<?php the_permalink(); ?>"></span><span class="st_plusone_hcount" st_url="<?php the_permalink(); ?>"></span><span class="st_email_hcount" st_url="<?php the_permalink(); ?>"></span>
							</div>
		
						</div>
					</article><!-- #post-<?php the_ID(); ?> -->
				
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>
</div>

<hr class="space">

<div class="page-wrap container">
				
	<header>
		<div class="page-bottom-header">
			<h3 class="page-bottom-title slab">
				More Work from the Gallery
			</h3>
		</div>
	</header>
	
	<?php 
	$current_post = $post->ID;
	echo '<!-- '.$current_post.' -->';
	$args = array(
		'post_type'=> 'gallery',
		'order'    => 'ASC',
		'posts_per_page' => '2',
		'orderby' => 'rand'
	);
	query_posts( $args ); ?>
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'gallery' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>