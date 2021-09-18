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


	<div id="wrapper">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'friendly-guide'); ?></a>

		<header id="header">
			<?php
			# TODO: hide title and desc if logo is present
			the_custom_logo();
			if (is_front_page() && is_home()) :
			?>
				<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php endif; ?>
			<?php
				$friendly_guide_description = get_bloginfo('description', 'display');
				if ($friendly_guide_description || is_customize_preview()) :
			?>
				<div>
					<?php echo $friendly_guide_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>

			<?php endif; ?>

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