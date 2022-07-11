<article id="single" <?php post_class(); ?>>
	<?php
    the_title('<h1 class="post-title">', '</h1>');
    ?>
	<div class="post-content">
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'binzhengstudio'),
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'pagelink' => '<span class="screen-reader-text">' . esc_html__('Page', 'binzhengstudio') . ' </span>%',
            'separator' => '<span class="screen-reader-text">, </span>',
        ));

        if ('' !== get_the_author_meta('description')) {
            get_template_part('template-parts/biography');
        }
        ?>
    </div>
</article>
