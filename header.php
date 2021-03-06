<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CapEd
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107517322-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments)};
		  gtag('js', new Date());

		  gtag('config', 'UA-107517322-1');
		</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'caped' ); ?></a>

	<!-- Pre-loader gif container -->
	<!-- <div class="loading-screen"></div> -->

	<header id="masthead" class="site-header fixed-top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-3">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="swoop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/caped-logo.svg" alt="Capital Education"></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="swoop" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/caped-logo.svg" alt="Capital Education"></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php //echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-9">
					<nav id="site-navigation" class="main-navigation float-right">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav><!-- #site-navigation -->

						<div class="mobile-menu-wrap">
							<span class="mobile-menu-5">
								<span class="line-1"></span>
								<span class="line-2"></span>
								<span class="line-3"></span>
							</span>
						</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<nav class="caped-mobile">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav>

	<div id="content" class="site-content">
