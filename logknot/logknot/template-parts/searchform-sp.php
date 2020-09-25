<form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="frm_search frm_search_sm">
    <input type="text" class="form-control" placeholder="検索" value="<?php echo get_search_query(); ?>" name="s" >
    <button class="btn btnGo" type="submit"><i class="fal fa-search"></i></button>   
</form>