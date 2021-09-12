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
hi from sidebar.php

	<?php dynamic_sidebar('sidebar-1'); ?>

	<!-- Footer -->
	<section id="footer">
		<ul class="icons">
			<li>
				<a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a>
			</li>
			<li>
				<a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a>
			</li>
			<li>
				<a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a>
			</li>
			<li>
				<a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a>
			</li>
			<li>
				<a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a>
			</li>
		</ul>
		<p class="copyright">
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme: %1$s by %2$s.', 'friendly-guide'), 'friendly-guide', '<a href="https://github.com/cutratefuture/friendly-guide">cutratefuture</a>');
			?>
		</p>
	</section>
</section>