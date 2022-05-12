<?php get_header(); ?>
    <div id="content">
        <main id="main" class="site-main">
			<?php
            get_template_part( 'template-parts/content', 'single' );
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
        </main>
		<?php get_sidebar(); ?>
    </div>
<?php get_footer(); //TODO?>