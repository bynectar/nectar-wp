<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/css/print.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/form.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php
// ido landing page stylesheet
if(is_page('Kudos') || is_page('love')){
   echo '<link href="http://www.bynectar.com/wp-content/themes/nectar/lp/ido/ido.css" rel="stylesheet" type="text/css" />';
}
?>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slides.min.jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flexslider-min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<script type="text/javascript" src="http://use.typekit.com/jrk1ios.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#slides').hover(
		function(){
			$('.next').css('display','none').fadeIn();
			$('.prev').css('display','none').fadeIn();
 		},
		function(){
			$('.next').css('display','block').fadeOut();
			$('.prev').css('display','block').fadeOut();
		}
	);
	$('#logolink').hover(
		function(){
			$(this).animate({marginLeft: '10px'}, 200);
 		},
		function(){
			$(this).animate({marginLeft: '0px'}, 200);
		}
	);
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('.flowertog').click(
		function(){
			var m = $(this).attr("title");
			var n = ".infocard"+m;
			$(n).slideToggle();
 		}
	);
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	$('.tablehead a').attr("href", "http://www.google.com/")
	$('.tablehead a').click(
		function(){
			var a = $(this).attr("title");
			var b = "."+a+"on";
			var c = "."+a+"off";
			var d = "#"+a;
			$(this).attr("href", d)
			$(b).fadeIn();
			$(c).fadeOut();
 		}
	);
});
</script>

</head>

<body <?php body_class(); ?>>

<div id="wrap">

<nav id="access" role="navigation" class="museo">
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav><!-- #access -->

<div class="page-wrap container hfeed">

	<header id="branding" role="banner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logolink"><img src="<?php echo get_template_directory_uri(); ?>/images/nectarlogo.png" id="logo" alt="Nectar - Boston, Massachusetts Wedding Flowers">
			<?php if ( is_home() ) { ?><h1><?php } ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/vmbar.png" id="vmbar" alt="Nectar - Boston, Massachusetts Wedding Flowers">
			<?php if ( is_home() ) { ?></h1><?php } ?>
			</a>

	</header><!-- #branding -->