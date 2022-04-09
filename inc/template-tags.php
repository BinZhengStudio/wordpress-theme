<?php

function bzstudio_post_date(): string {
	$time_string = '<time class="post-date" datetime="%1$s">%2$s</time>';

	return sprintf(
		$time_string,
		get_the_date( DATE_W3C ),
		get_the_date()
	);
}

function bzstudio_post_picture() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
		?>

		<div class="post-picture">
			<?php the_post_thumbnail(); ?>
		</div>

	<?php else : ?>

		<a class="post-picture" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
		</a>

	<?php
	endif;
}