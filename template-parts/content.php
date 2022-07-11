<article class="post post-list">
    <div class="outer-post-thumb">
        <?php binzhengstudio_post_thumbnail(); ?>
    </div>
    <h1 class="post-title"><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <div class="post-content-wrapper">
        <p class="post-time">发布于<?php echo binzhengstudio_post_date(); ?></p>
        <div class="post-excerpt">
			<?php the_excerpt(); ?>
        </div>
        <a class="button" target="_blank" href="<?php the_permalink(); ?>">
            <button>继续查看</button>
        </a>
    </div>
    <div class="inner-post-thumb">
		<?php binzhengstudio_post_thumbnail(); ?>
    </div>
</article>