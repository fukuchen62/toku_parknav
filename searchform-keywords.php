<form class="header_search" action="<?php echo home_url('/'); ?>" method="get">
    <input type="hidden" name="search_type" value="keywords">
    <input type="text" placeholder="キーワードを入力" name="s" value="<?php echo the_search_query(); ?>">
    <i class="fas fa-search"></i>
</form>