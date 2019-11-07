<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnderTopher
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'undertopher' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container">
		<div class="d-flex align-items-center py-2 py-lg-4">
			<div class="site-branding">
				<?php
				the_custom_logo(); ?>
				<div class="header-icon mr-2 mr-lg-4">
					<a href="/">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.41 56.72"><defs><style>.cls-1{fill:#231f20;}.cls-2{fill:#58595b;}.cls-3{fill:#6d6e71;}.cls-4{fill:#414042;}</style></defs><title>cr-logo-grayscale</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="16.21 20.26 8.1 16.21 8.1 40.51 16.21 44.57 16.21 20.26"/><polygon class="cls-2" points="32.41 12.15 24.31 16.21 24.31 32.41 32.41 28.36 32.41 12.15"/><polygon class="cls-2" points="32.41 36.46 24.31 40.51 24.31 56.72 32.41 52.67 32.41 36.46"/><polygon class="cls-1" points="16.21 28.36 8.1 32.41 24.31 40.51 32.41 36.46 16.21 28.36"/><polygon class="cls-3" points="8.1 0 0 4.05 24.31 16.21 32.41 12.15 8.1 0"/><polygon class="cls-4" points="16.21 36.46 8.1 40.51 16.21 44.57 16.21 36.46"/><polygon class="cls-4" points="24.31 32.41 16.21 36.46 24.31 40.51 32.41 36.46 24.31 32.41"/></g></g></svg>
					</a>
				</div>
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$undertopher_description = get_bloginfo( 'description', 'display' );
				if ( $undertopher_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $undertopher_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'undertopher' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<ul class="list-inline">
				<li class="list-inline-item"><i class="fab fa-github"></i></li>
			</ul>
		</div>
	</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
