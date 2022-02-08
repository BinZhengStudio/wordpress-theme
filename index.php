<?php get_header(); ?>

    <main id="main" class="site-main">
		<?php if ( have_posts() ) :while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );
		endwhile;
			?>

			<?php
			if ( get_next_posts_link() ) {
				next_posts_link();
			}
			if ( get_previous_posts_link() ) {
				previous_posts_link();
			}
			?>

		<?php else: ?>
            <p>No posts found. :(</p>
		<?php endif; ?>
    </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>