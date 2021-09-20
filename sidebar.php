<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package friendly-guide
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>
<section id="sidebar">


	<?php dynamic_sidebar('sidebar-1'); ?>

	<!-- Footer -->
	<section id="footer">
		<p class="copyright">
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme: %1$s by %2$s.', 'friendly-guide'), 'friendly-guide', '<a href="https://github.com/cutratefuture/friendly-guide">cutratefuture</a>');
			?>
		</p>
	</section>
</section>