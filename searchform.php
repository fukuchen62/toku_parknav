<!-- 検索ボックス -->
<form class="head_search" action="<?php echo home_url('/'); ?>">
    <input class="head_form" size="300" type="text" name="s" value="<?php echo the_search_query(); ?>" placeholder="キーワードを入力">
    <input class="head_submit fas" type="submit" value="&#xf002;">
</form>