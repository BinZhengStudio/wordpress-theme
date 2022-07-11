<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			printf( _x( '有 %1$s 条评论', 'comments title', 'binzhengstudio' ), number_format_i18n( $comments_number ) );
			?>
        </h2>

		<?php the_comments_navigation(); ?>

        <ul class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 42,
				)
			);
			?>
        </ul>

		<?php the_comments_navigation(); ?>

	<?php endif; ?>

	<?php
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
        <p class="no-comments"><?php _e( '评论已关闭', 'binzhengstudio' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);
	?>

</div>
