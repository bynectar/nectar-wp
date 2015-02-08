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

				<div class="span-12 last">					
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php get_template_part( 'content', 'page' ); ?>
	
					<?php endwhile; // end of the loop. ?>
				</div>
				<div class="span-6">
					
					<?php echo do_shortcode('[contact-form 1 "ContactPageForm"]') ?>
					
				</div>
				<div class="span-6 last" id="contactbox">
					<h2>How to get in touch with Misty</h2>
					<ul id="contactlist">
						<li class="contact-info contact-email">
							<a href="mailto:misty@bynectar.com">misty@bynectar.com</a>
						</li>
						<li class="contact-info contact-phone">(617) 595-5741
						</li>
						<li class="contact-info contact-fb">
							<a href="https://www.facebook.com/ByNectar">Like us on Facebook to get updates and share photos.</a>
						</li>
						<li class="contact-info contact-tw">
							<a href="https://www.twitter.com/ByNectar">Follow us on Twitter for exclusive real-time updates.</a>
						</li>
						<li class="contact-info contact-ww">
							<a href="http://www.weddingwire.com/biz/nectar-chelsea/d64b447c12555d69.html">Wedding Wire Bride's Choice 2011!</a>
						</li>
						<!--<li class="contact-info contact-yelp">
							<a href="http://www.yelp.com/biz/nectar-floral-artisan-chelsea">Find me, review me, yelp me.</a>
						</li>-->
					</ul>
					<h2>Boston A-List</h2>
					<ul id="contactlist">
						<li class="contact-info">
							We're nominated for <b>Best Wedding Florist</b> in the 2012 Boston A-List! Vote for us today!<br /><br />

<!-- Place this HTML where you want the badge to go -->
<div class="cv-widget" data-type="button" data-variant="voteforus" data-eid="478400" data-bid="626306">
    <a href="http://boston.cityvoter.com/wbiz/626306" class="cv-button" target="_top"></a>
</div>

<!-- Place this script somewhere after the tag above. If you have multiple badges, only include the script once. -->
<script type='text/javascript'>
(function() {
window.___cityvoter = { basePath:'//cdn.cityvoterinc.com/s' };
var s = document.createElement('script');
s.type = 'text/javascript';
s.src = window.___cityvoter.basePath +  '/widget.js';
s.async = true;
var ph = document.getElementsByTagName('script')[0];
ph.parentNode.insertBefore(s, ph);
})();
</script><br />

						</li>

					</ul>
					<h2>Our Locations</h2>
					<ul id="contactlist">
						<li class="contact-info">
							<b>Our Main Location:</b><br/>
							161 Main Street<br/>
							Suite 103<br/>
							Medway, MA 02053
						</li>
						<li class="contact-info">
							<b>We also meet clients in the Boston Bridal Lounge:</b><br/>
							<a href="http://www.bostonbridallounge.com/" target="_blank">Boston Bridal Lounge</a><br/>
							125 Newbury Street<br/>
							Second Floor<br/>
							Boston, MA 02116
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>