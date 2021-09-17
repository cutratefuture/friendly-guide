<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package friendly-guide
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

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

	<?php friendly_guide_post_thumbnail(); ?>

	<div class="post">
		<?php
		the_excerpt();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'friendly-guide'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php friendly_guide_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->