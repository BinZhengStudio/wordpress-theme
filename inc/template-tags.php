<?php

function bzstudio_post_date(): string {
	$time_string = '<time class="post-date" datetime="%1$s">%2$s</time>';

	return sprintf(
		$time_string,
		get_the_date( DATE_W3C ),
		get_the_date()
	);
}