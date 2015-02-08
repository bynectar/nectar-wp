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
        			<div class="slider" id="idoslider">
        				<ul class="slides">

        					<li>
        						<img class="idoslideimg" src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/slides/title_01.jpg"/>
        					</li>

        					<li>
        						<img class="idoslideimg" src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/slides/mariemichael.jpg"/>
        						<div class="idoslide_intro">
        							<h3 class="idoslide_introtitle">Marie &amp; Michael</h3>
        						</div>
        					</li>

        					<li>
        						<img class="idoslideimg" src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/slides/mariemichael.jpg" style="opacity:.5;"/>
        						<div class="idoslide_content">
        							<h3 class="idoslide_title">Marie &amp; Michael</h3>
        							<h4 class="idoslide_date">September 22, 2012</h4>
        							<p class="idoslide_quote">
        								&ldquo;Misty!!! The flowers were so gorgeous and my gosh the arbor was breathtaking! I bawled when I saw it. Everything came together beautifully. You are so very talented!...&rdquo;
        							</p>
        							<p class="idoslide_byline">&mdash; Marie</p>
        							<a class="idoslide_link" href="http://www.bynectar.com/gallery/marie-michael/" title="Visit the Marie & Michael Gallery">Visit the Marie & Michael Gallery &raquo;</a>
        						</div>
        					</li>

        					<li>
        						<img class="idoslideimg" src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/slides/kerrypatrick.jpg"/>
        						<div class="idoslide_intro">
        							<h3 class="idoslide_introtitle">Kerry &amp; Patrick</h3>
        						</div>
        					</li>

        					<li>
        						<img class="idoslideimg" src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/slides/kerrypatrick.jpg" style="opacity:.5;"/>
        						<div class="idoslide_content">
        							<h3 class="idoslide_title">Kerry &amp; Patrick</h3>
        							<h4 class="idoslide_date">September 15, 2012</h4>
        							<p class="idoslide_quote">
        								&ldquo;...We wanted to thank you and your team for all the gorgeous work and pieces you created for us. We absolutely loved them- as did all our guests!! Everything turned out more lovely than I had ever imagined, and I was overjoyed!! My bouquet was gorgous and perfect (as were all the personal flowers)...&rdquo;
        							</p>
        							<p class="idoslide_byline">&mdash; Kerry</p>
        							<a class="idoslide_link" href="http://www.bynectar.com/gallery/kerry-patrick/" title="Visit the Kerry & Patrick Gallery">Visit the Kerry & Patrick Gallery &raquo;</a>
        						</div>
        					</li>

        					<li>
        						<img class="idoslideimg" src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/slides/taylorjohn.jpg"/>
        						<div class="idoslide_intro">
        							<h3 class="idoslide_introtitle">Taylor &amp; John</h3>
        						</div>
        					</li>

        					<li>
        						<img class="idoslideimg" src="<?php bloginfo('stylesheet_directory'); ?>/lp/ido/img/slides/taylorjohn.jpg" style="opacity:.5;"/>
        						<div class="idoslide_content">
        							<h3 class="idoslide_title">Taylor &amp; John</h3>
        							<h4 class="idoslide_date">October 13, 2012</h4>
        							<p class="idoslide_quote">
        								&ldquo;...I just wanted to send you a note to say thank you and that I LOVE LOVE LOVE all of the flowers at the wedding. They were absolutely gorgeous-- so perfect!! Everyone was commenting on how beautiful they were! You are so talented and did such an amazing job, I can't thank you enough...&rdquo;
        							</p>
        							<p class="idoslide_byline">&mdash; Taylor</p>
        							<a class="idoslide_link" href="http://www.bynectar.com/gallery/taylor-john/" title="Visit the Taylor & John Gallery">Visit the Taylor & John Gallery &raquo;</a>
        						</div>
        					</li>
        					
        					<li>
        						<div class="idofinal_content">
        							<h3 class="idofinal_title">We love our clients.</h3>
        							<a class="idofinal_link" href="http://www.bynectar.com/gallery/" title="Gallery of work, Nectar Floral Design">See more in our gallery &raquo;</a>
        							<a class="idofinal_link" href="http://www.bynectar.com/contact/" title="Contact Nectar Floral Design">Contact us today &raquo;</a>
	       						</div>
        					</li>

        				</ul>
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