<article class="post post-list">
    <h1 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <p class="post-time">发布于<?php echo bzstudio_post_date(); ?></p>
    <?php the_excerpt(); ?>
    <a class="button" target="_blank" href="<?php the_permalink(); ?>"><button>继续查看</button></a>
</article>