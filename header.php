<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
?>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		
		<div class="site-branding">

			<?php 
				if ( get_theme_mod( 'custom_logo' ) ) {
					the_custom_logo();
				}
			?>

		</div> <!-- .site-branding -->

		<nav id="site-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', '' ); ?>">

			<?php
				wp_nav_menu(
					[
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'primary-menu menu',
						'depth'          => 3,
					]
				);
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->


	<div id="content" class="site-content">