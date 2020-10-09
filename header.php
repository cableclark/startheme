<?php
/**
 * The header for our theme
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Star Star
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169345385-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-169345385-1');
	</script>
	<?php 
	wp_head(); 
	if(is_single()) {
		add_twitter_card(get_queried_object_id());
		}
	?>
</head>
<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Star-star' ); ?></a>
	<header id="masthead" class="site-header <?php if (!is_front_page()) {echo "smaller-header-nothomed smaller-header-dark";}?>">
		<div class="site-branding <?php if (!is_front_page()) {echo "site-branding--nothomed";}?>"><?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			else :
				?><p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$star_description = get_bloginfo( 'description', 'display' );
			if ( $star_description || is_customize_preview() ) :
				?><p class="site-description"><?php echo $miss_albini_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?></div>
		<nav id="site-navigation" class="main-navigation">
		
			<div class="main-menu">
			<div class="close-menu">X</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;
				}
				?>  
				<?php echo search_icon_svg();?> 
					
			</div>
			<div class="toggler" aria-controls="primary-menu" aria-expanded="false"> 
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div class="menu-hider"></div>
		</nav>
	</header>