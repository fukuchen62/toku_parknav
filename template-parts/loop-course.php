<section class="menu">
    <a href="<?php the_permalink(); ?>">
        <figure class="menu_pic">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium') ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
            <?php endif; ?>
        </figure>
        <h3 class="menu_title"><?php the_title(); ?></h3>
        <div class="menu_desc">
            <?php the_excerpt(); ?>
        </div>
    </a>
</section>
