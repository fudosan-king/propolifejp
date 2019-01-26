<div id="wrap_search">
    
    <form role="search" autocomplete="on" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" id="search" class="search-field" placeholder="What're we looking for ?" value="<?php echo get_search_query(); ?>" name="s" />
        <input id="search_submit" value="Rechercher" type="submit">
        <input type="hidden" value="post" name="post_type" id="post_type" />
    </form>

</div>