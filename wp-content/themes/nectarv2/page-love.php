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

        		<!-- BEGIN LANDING PAGE CODE -->
        		<section class="stripe" id="ido">
        			<div class="video" id="loveVideo">
	        			<!-- INSERT VIMEO EMBED CODE -->
	        				<iframe src="http://player.vimeo.com/video/55769947?title=0&amp;byline=0&amp;portrait=0&amp;color=ffcc00&amp;autoplay=1" width="940" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	        			<!-- END VIMEO EMBED CODE -->
        			</div>
        			<div id="idoctas">
        				<p>Let's talk about your wedding. <a href="http://www.bynectar.com/contact" title="Contact Nectar Floral Design">Drop us a line</a>.</p>
        				<p id="idoctasright">Want to share this? 
	        				<a class="social_popup" href="http://twitter.com/share?url=http%3A%2F%2Fwww.bynectar.com%2Fkudos&text=Nectar%20Floral%20Design%20" title=""><img src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/twit.png" alt="" width="24" height="24"/></a>
	        				<a class="social_popup" href="http://www.facebook.com/share.php?u=http%3A%2F%2Fwww.bynectar.com%2Fkudos" title=""><img src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/fb.png" alt="" width="24" height="24"/></a>
<!--	        				<a class="social_popup" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.bynectar.com" title=""><img src="img/pin.png" alt="" width="24" height="24"/></a> -->
        				</p>
        			</div>
        		</section>
				<script>
					$(document).ready(function() {
					
						$('.social_popup').click(function(event) {
						var width  = 575,
						    height = 400,
						    left   = ($(window).width()  - width)  / 2,
						    top    = ($(window).height() - height) / 2,
						    url    = this.href,
						    opts   = 'status=1' +
						             ',width='  + width  +
						             ',height=' + height +
						             ',top='    + top    +
						             ',left='   + left;
						
						window.open(url, 'social_popup', opts);
						
						return false;
						});
										
						$('#idoslider').flexslider({
							animation: "fade",
							animationLoop: false,
							slideshow: false,
							slideSpeed: 1000,
							controlNav: false,
							directionalNav: true,
							startAt: 0,
							start: function(){$('.flex-next').css('opacity','1');},
							after: function(){$('.flex-next').css('opacity','');}
						});
					
					
					});
				</script>
        		<!-- END LANDING PAGE CODE -->
 			
			</div>
		</div>
	</div>

<?php get_footer(); ?>