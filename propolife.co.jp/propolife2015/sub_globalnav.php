<?php global $dir_category, $current_lang, $dir_name; ?>
<?php if(!empty($dir_category)): ?>
<div id="sub_gnav">
    
    <div id="sub_gnav_inner"><p class="sub_gnav_ico"></p>
        <div id="sub_gnav_list">
            
            <?php
                $this_page_title = get_the_title($post->post_parent);
                $page_type = (get_post_type() == 'page')? get_page(get_the_ID())->post_name: get_post_type();
                $menu_parent = $dir_category;
                $get_page_parents = get_page_data(get_page_by_path($menu_parent));
                $parents_id = $get_page_parents['id'];
                $parents_title = $get_page_parents['title'];
            ?>
            <?php if($get_page_parents['lang']): ?>
            <h3><?php echo $parents_title; ?></h3>
                <ul>
                    <?php
                        $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'child_of' => $parents_id);
                        $child_pages = get_pages($args);
                        foreach($child_pages as $child_page): setup_postdata($child_page);
                        $post_name = $child_page->post_name;
                        $page_id = $child_page->ID;
                        $slug = $child_page->post_name;
                        $page_title = str_replace(array("\r\n","\n","\r", "<br />", "<br>"), '', get_post_meta($page_id, 'gnav_title', true));
                        $lang_select_keys = get_post_meta($page_id, 'check_language');
                        $is_show_language = false;
                        for($i = 0; $i < 3; $i ++){
                            if($lang_select_keys[0][$i] == $current_lang){
                                $is_show_language = true;
                                break;
                            }
                        }
                        $page_url = get_permalink($page_id);
                        $is_current = ($page_type == $slug)? true: false;
                    ?>
                    <?php if($is_show_language): ?><li<?php if($is_current): echo ' class="current"'; endif; ?>><a href="<?php echo $page_url; ?>"><?php echo $page_title; ?></a></li><?php endif; echo "\n"; ?>
                    <?php endforeach; wp_reset_postdata();?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>