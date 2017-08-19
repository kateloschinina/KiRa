<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

 <div class="main-wrap" role="main">
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php _e( 'Oops, this page does not exist', 'foundationpress' ); ?></h1>
		</header>
		<div class="entry-content">
			<div class="error">
				<p class="bottom"><?php _e( 'Maybe, you were looking for something else?', 'foundationpress' ); ?></p>
			</div>
			<p>
				<?php
					/* translators: %s: home page url */
					printf( __(
						'Try to search the <a href="%s">home page</a>.', 'foundationpress' ),
						home_url()
					);
				?>
			</p>
		</div>
	</article>

 <?php get_sidebar(); ?>

</div>

<?php get_footer();
