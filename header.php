<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package friendly-guide
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('is-preload'); ?>>

	<?php wp_body_open(); ?>
	hi from header.php

	<div id="wrapper">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'friendly-guide'); ?></a>

		<header id="header">
			<div>
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>

					<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$friendly_guide_description = get_bloginfo('description', 'display');
				if ($friendly_guide_description || is_customize_preview()) :
				?>
					<p><?php echo $friendly_guide_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
						?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav class="links">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'friendly-guide'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
					
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->