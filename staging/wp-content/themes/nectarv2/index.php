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
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			
				<div class="span-12 last">
	
					<?php $args = array(
						'post_type'=> 'gallery',
						'order'    => 'DESC',
						'posts_per_page' => '1',
						'orderby' => 'meta_value',
						'meta_key' => 'gallery_featured'
					);
					query_posts( $args ); ?>
					
					<?php while ( have_posts() ) : the_post(); ?>
		
						<article id="post-<?php the_ID(); ?>"  class="gallery-set gallery-single">
							<div id="slides">
								<div class="slides_container">
									<?php
									$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order'    => 'ASC') );
									foreach ( $attachments as $attachment_id => $attachment ) {
										echo '<div>';
										echo wp_get_attachment_image($attachment_id, 'gallery-spread', true);
										echo '</div>';
									} ?>
								</div>
								<div class="titleblock gallery-titleblock">
								
									<h4 class="catlabel">
										From the <a href="<?php echo esc_url( home_url( '/' ) ); ?>gallery" class="gold">Gallery</a>
									</h4>
									
									<h2 class="slab"><span class="title-wrap">
										<a href="<?php the_permalink(); ?>" class="gold"><?php the_title() ?></a>
									</span></h2>
									
									<h4 class="catlabel byline">
										<?php $photo = get_post_meta($post->ID, 'gallery_photo', $single);
										$photolink = get_post_meta($post->ID, 'gallery_photosite', $single);
										if ($photo != null)
										echo 'Photos by <a href="' . $photolink[0] . '" title="' . $photo[0] . '" target="new">' . $photo[0] . '</a>'; ?>
									</h4>
									
								</div>
								<div class="prev"><img src="<?php echo get_template_directory_uri(); ?>/images/prev.png"></div>
								<div class="next"><img src="<?php echo get_template_directory_uri(); ?>/images/next.png"></div>
							</div>
						</article><!-- #post-<?php the_ID(); ?> -->
					
					<?php endwhile; // end of the loop. ?>
					
				</div>
				<hr>
				<div class="span-6" id="homenews">
					<a href="/love/" title="Nectar Video: I Love Flowers"><img src="<?php echo get_template_directory_uri(); ?>/images/home/lovevid_thumb.jpg" alt="Nectar Video: I Love Flowers"></a>
					<p class="homevid_caption">See how it all comes together.<br />
					<a href="/love/" title="Nectar Video: I Love Flowers">Watch "I Love Flowers" &raquo;</a></p>
				</div>
	
				<div class="span-3 home-links">
					<div>
						<a href="/about/">
						<h3 class="slab gold">About Nectar</h3>
						<p class="museo">We have a certain way of doing things.</p>
						</a>
					</div>
					<div>
						<a href="/pricing/">
						<h3 class="slab gold">Pricing</h3>
						<p class="museo">Brass tacks, and how to commission flowers.</p>
						</a>
					</div>
					<div>
						<a href="flowers101">
						<h3 class="slab gold">Flowers 101</h3>
						<p class="museo">From stem to stamen. There will be a quiz.</p>
						</a>
					</div>
				</div>
	
				<div class="span-3 home-links last">
					<div>
						<a href="/gallery/">
						<h3 class="slab gold">The Gallery</h3>
						<p class="museo">We take pride in our work. The proof is in the pudding.</p>
						</a>
					</div>
					<div>
						<a href="/contact/">
						<h3 class="slab gold">Contact</h3>
						<p class="museo">Got questions? We've got answers. Just ask.</p>
						</a>
					</div>
					<div>
						<a href="/kudos/">
						<h3 class="slab gold">Kudos</h3>
						<p class="museo">Meet some of the couples who've loved our work.</p>
						</a>
					</div>
					<!-- Remove A La Mode Link
					<div>
						<a href="/alamode/">
						<h3 class="slab gold">&Aacute; La Mode <span class="gray">BLOG</span></h3>
						<p class="museo">On the subject of flowers and beautiful weddings.</p>
						</a>
					</div>-->
				</div>
	
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>