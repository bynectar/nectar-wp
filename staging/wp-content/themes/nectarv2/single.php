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

				<header>
					<div class="page-header">
						<h1 class="page-title slab">
							<?php if ( 'gallery' == get_post_type() ) : ?>
								<?php _e( 'The Gallery', 'twentyeleven' ); ?>
							<?php else : ?>
								&Aacute; La Mode <span class="gray">blog</span>
							<?php endif; ?>
							<span class="page-title-sub">
							<?php if ( 'gallery' == get_post_type() ) : ?><!-- POST TYPE SWITCH --> 
								Our work speaks for itself.
							<?php else : ?>
								Wedding Decor, Floral Design and Uncompromising Style.
							<?php endif; ?>
							</span>
						</h1>
					</div>
					<div class="page-subhead">
					</div>
				</header>
				
				<div class="span-9">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>
				</div>
				<div class="span-3 last">
					
					<div class="fbwrap"><center>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FNectar%2F148868388516583&amp;width=200&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:180px; height:395px;" allowTransparency="true"></iframe>
					</div></center>
					
					<nav id="nav-single" class="widget">
						<h3 class="assistive-text widget-title"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<ul>
						<?php previous_post_link( '%link', __( '<li class="nav-previous"><span class="gold">&laquo; Previous Post</span></li>', 'twentyeleven' ) ); ?>
						<?php next_post_link( '%link', __( '<li class="nav-next"><span class="gold">Next Post &raquo;</span></li>', 'twentyeleven' ) ); ?>
						</ul>
					</nav><!-- #nav-single -->

					<?php get_sidebar(); ?>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>