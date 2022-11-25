<section class="menu">
    <a href="<?php the_permalink(); ?>">
        <figure class="menu_pic">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium') ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
            <?php endif; ?>
        </figure>
        <h3 class="menu_title"><?php
                                $pic = get_field('course_image1');
                                // 大サイズ画像URL
                                $pic_url = $pic['sizes']['midium'];
                                ?>
            <img src="<?php echo $pic_url; ?>" alt="<?php echo $pic['filename']; ?>">
        </h3>
        <p class="menu_price"><?php the_field('course_time1') ?></p>
        <div class="menu_desc">
            <?php the_field('course_discription1'); ?>
        </div>
    </a>
</section>