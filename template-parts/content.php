<article class="post post-list">
    <h1 class="post-title"><a target="_blank" href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <p class="post-time">发布于<?php echo bzstudio_post_date(); ?></p>
    <div class="post-excerpt">
        <?php the_excerpt();?>
    </div>
    <a class="button" target="_blank" href="<?php the_permalink(); ?>"><button>继续查看</button></a>
</article>