<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

				<header>
					<div class="page-header">
						<h1 class="page-title slab">
							&Aacute; La Mode <span class="gray">blog</span>
							<span class="page-title-sub">Wedding Decor, Floral Design and Uncompromising Style.<?php category_description(); ?></span>
						</h1>
					</div>
					<div class="page-subhead">
					</div>
				</header>

				<div class="span-9">
					<?php if ( have_posts() ) : ?>
		
						<?php twentyeleven_content_nav( 'nav-above' ); ?>
								
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
		
							<?php
								/* Include the Post-Format-specific template for the content.
								 * If you want to overload this in a child theme then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>
		
						<?php endwhile; ?>
		
						<?php twentyeleven_content_nav( 'nav-below' ); ?>
		
					<?php else : ?>
		
						<article id="post-0" class="post no-results not-found">
							<header class="entry-header">
								<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
							</header><!-- .entry-header -->
		
							<div class="entry-content">
								<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						</article><!-- #post-0 -->
		
					<?php endif; ?>
				</div>
				<div class="span-3 last">
					
					<div class="fbwrap"><center>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FNectar%2F148868388516583&amp;width=200&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:395px;" allowTransparency="true"></iframe>
					</div></center>
					
					<?php get_sidebar(); ?>
				</div>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_footer(); ?>
