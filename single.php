<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package friendly-guide
 */

get_header();
?>
<main id="main" <?php post_class(''); ?>>
	hi from single.php
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="title">', '</h1>');
		else :
			the_title('<h2 class="title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="meta">
				<?php
				friendly_guide_posted_on();
				friendly_guide_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
		<?php
		while (have_posts()) :
			the_post();

			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'friendly-guide'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'friendly-guide') . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'friendly-guide') . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</article><!-- #main -->
	<footer class="entry-footer">
		<?php friendly_guide_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</main><!-- #post-<?php the_ID(); ?> -->

<?php
get_sidebar();
get_footer();
