<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // wp_head()を呼び出す
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <?php
    // wp_body_openを呼び出す
    wp_body_open();
    ?>

    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo@2x.png" alt="とくしま GO!GO! パークなび"></a></h1>
            </div>

            <div class="header_desc">
                <!-- <p>サイトのキャッチフレーズ</p> -->
                <p><?php bloginfo('description'); ?></p>
            </div>

            <!-- 検索フォームを表示させる -->
            <?php get_search_form(); ?>
        </div>

        <div class="header_links">
            <nav class="gnav">
                <!-- <ul class=""> -->
                <!-- <li><a href="<?php //echo home_url('/'); -->
                ?>">HOME</a></li>
                <li><a href="<?php //echo home_url('/about/');
                                ?>">わたしたちについて</a></li>
                <li><a href="<?php //echo home_url('/access/');
                                ?>">アクセス</a></li>
                <li><a href="<?php //echo home_url('/category/news');
                                ?>">最新情報</a></li>
                <li><a href="<?php //echo home_url('/menu/');
                                ?>">メニュー紹介</a></li>
                <li><a href="<?php //echo home_url('/contact/');
                                ?>">お問い合わせ</a></li>

                </ul> -->
                <?php
                $args = array(
                    'menu' => 'global-navigation',
                    'menu_class' => '',
                    'container' => false,
                );
                wp_nav_menu($args);
                ?>
            </nav>

            <ul class="header_sns">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>

        <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
            <defs>
                <clipPath id="clip-path">
                    <rect width="30" height="30" fill="none" />
                </clipPath>
            </defs>
            <g clip-path="url(#clip-path)">
                <rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)" />
                <rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)" />
                <rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)" />
            </g>
        </svg>
    </header>