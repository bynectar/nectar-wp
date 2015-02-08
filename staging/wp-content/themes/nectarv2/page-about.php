<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
							<span class="page-title-sub">The </span><?php the_title(); ?><span class="page-title-sub"> Page.</span>
						</h1>
					</div>
					<div class="page-subhead">
					</div>
				</header>
				
				<center><img src="<?php echo get_template_directory_uri(); ?>/images/timelapse.jpg" class="photowrap" alt="Misty Florez, Owner of Nectar, in the Boston Flower Market"></center>
				<span class="photo-caption caption-about">Misty Florez, Owner of Nectar, in the Boston Flower Market; Photo by <a href="http://www.johnthedesigner.com" alt="johnthedesigner.com">John Livornese</a></span>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
			</div>
		</div>
	</div>

<?php get_footer(); ?>
