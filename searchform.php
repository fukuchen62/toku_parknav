<div class=" head_menu_item">
    <form class="head_search" method="get" action="<?php echo home_url('/'); ?>">
        <input type="hidden" name="search_type" value="keywords">
        <input class="head_form" size="300" type="search" name="s" placeholder="キーワードを入力" id="clearbutton7" maxlength="20" value="<?php echo the_search_query(); ?>">
        <input class="head_submit fas" type="submit" value="&#xf002;">
    </form>
</div>