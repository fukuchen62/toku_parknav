<!-- <div class=" head_menu_item">
    <form class="header_search" action="<?php echo home_url('/'); ?>" method="get">
        <input type="text" placeholder="キーワードを入力" name="s" value="<?php echo the_search_query(); ?>">
        <i class="fas fa-search"></i>
    </form>
</div> -->

<div class=" head_menu_item">
    <form class="head_search" method="get" action="<?php echo home_url('/'); ?>">
        <input type="hidden" name="search_type" value="keywords">
        <input class="head_form" size="300" type="search" name="s" placeholder="キーワードを入力" value="<?php echo the_search_query(); ?>">
        <input class="head_submit fas" type="submit" value="&#xf002;">
    </form>
</div>