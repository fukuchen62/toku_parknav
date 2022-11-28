<section class="menu">
    <a href="<?php the_permalink(); ?>">
        <figure class="menu_pic">
            <!-- <img src="./assets/img/menu/menu-1@2x.jpg" alt=""> -->
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium') ?>
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="noimage_600x400">
            <?php endif; ?>
        </figure>
        <h3 class="menu_title"><?php the_title(); ?></h3>
        <!-- <p class="menu_price">800円</p> -->
        <div class="menu_desc">
            <?php the_content(); ?>
        </div>
    </a>
</section>