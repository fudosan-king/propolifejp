<?php global $current_lang; ?>
</div><!-- // #wrap -->

<div id="footer">
    <p class="btn_pagetop"><img src="<?php bloginfo('template_directory'); ?>/common/images/btn_pagetop.png" width="60" height="60" alt=""></p>
    <div id="footer_inner">
        <div id="sitemap">
            <ul>
                <li class="col_01">
                    <ul>
                    	<?php $home = get_page_data(get_page_by_path('home')); ?>
                        <li><a href="/"><?php echo $home['title']; ?></a></li>
                    </ul>
                    <?php
                        $page_data = get_page_data(get_page_by_path('news'));
                        $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'child_of' => $page_data['id']);
                        $child_pages = get_pages($args);
                    ?>
                    <?php if($page_data['lang']): ?>
                    <ul>
                        <li class="parents"><?php echo $page_data['title']; ?></li>
                        <li class="sub">
                            <ul>
                                <?php
                                    foreach($child_pages as $child_page):
                                    $page_data = get_page_data($child_page);
                                ?>
                                <?php if($page_data['lang']): ?><li><a href="<?php echo $page_data['url']; ?>"><?php echo $page_data['title']; ?></a></li><?php endif; echo "\n"; ?>
                                <?php endforeach; ?>
                                <li><a href="/ir/">電子公告</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php endif; ?>
                </li>
                <li class="col_02">
                    <?php
                        $page_data = get_page_data(get_page_by_path('company'));
                        $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'child_of' => $page_data['id']);
                        $child_pages = get_pages($args);
                    ?>
                    <?php if($page_data['lang']): ?>
                    <ul>
                        <li class="parents"><?php echo $page_data['title']; ?></li>
                        <li class="sub">
                            <ul>
                                <?php
                                    foreach($child_pages as $child_page):
                                    $page_data = get_page_data($child_page);
                                ?>
                                <?php if($page_data['lang']): ?><li><a href="<?php echo $page_data['url']; ?>"><?php echo $page_data['title']; ?></a></li><?php endif; echo "\n"; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                    <?php endif; ?>
                </li>
                <li class="col_03">
                    <?php
                        $page_data = get_page_data(get_page_by_path('business'));
                        $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'child_of' => $page_data['id']);
                        $child_pages = get_pages($args);
                    ?>
                    <?php if($page_data['lang']): ?>
                    <ul>
                        <li class="parents"><?php echo $page_data['title']; ?></li>
                        <li class="sub">
                            <ul>
                                <?php
                                    foreach($child_pages as $child_page):
                                    $page_data = get_page_data($child_page);
                                ?>
                                <?php if($page_data['lang']): ?><li><a href="<?php echo $page_data['url']; ?>"><?php echo $page_data['title']; ?></a></li><?php endif; echo "\n"; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                    <?php endif; ?>
                    <ul>

                    </ul>
                </li>
                <li class="col_04">
                    <?php
                        $page_array = array('recruitment', 'cooperate', 'terms', 'policy', 'antisocial', 'contact');
                        $page_list = array();
                        foreach($page_array as $p){
                            $page_list += array($p => get_page_data(get_page_by_path($p)));
                        }
                    ?>
                    <ul>
                        <?php
                            foreach($page_array as $p):
                            $url = $page_list[$p]['url'];
                            $title = $page_list[$p]['title'];
                        ?>
                        <?php if($page_list[$p]['lang']): ?>
                        <?php if($p != 'recruitment' && $p != 'contact'): ?>
                            <li<?php if($p == 'policy'){ echo ' class="off"';} ?>><a href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
                        <?php elseif($p == 'recruitment'): ?>
                            <li><a href="/recruit/index.html" target="_blank"><?php echo $title; ?></a></li>
                        <?php elseif($p == 'contact'): ?>
                            <li class="off"><a href="<?php echo get_contact_page_url(); ?>" target="_blank"><?php echo $title; ?></a></li>
                        <?php elseif($p == 'cooperate'): ?>
                            <li><a href="" target="_blank"><?php echo $title; ?></a></li>
                        <?php endif; ?>
                        <?php endif; echo "\n"; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="col_05">
                    <?php
                        global $post;
                        $page_child_data = get_page_data(get_page_by_path('business/main'));
                        $args = array( 'post_type' => 'page', 'include' => $page_child_data['id'] );
                        $child_post = get_pages($args);
                    ?>
                    <?php if($page_child_data['lang']): ?>
                    <?php
                        foreach($child_post as $post): setup_postdata($post);
                        $post_id = $post->ID;
                        $page_title = get_post_meta($post_id, 'footer_post_title', true);
                    ?>
                    <ul>
                        <li class="parents"><?php echo $page_title ?></li>
                        <li class="sub">
                            <ul>
                                <?php
                                    $loop_num = 0;
                                    $row_num = 0;
                                    while(the_repeater_field('business_table')):
                                    $footer_type_name = get_sub_field('type_name_footer');
                                    // $url = $page_child_data['url'] . '#main' . $loop_num;
                                    $url = get_sub_field('type_detail_url');
                                ?>
                                <li>
                                    <ul>
                                    <li class="works_parent"><a href="<?php echo $url; ?>" target="_blank"><?php echo $footer_type_name; ?></a></li>
                                    <?php
                                        while(the_repeater_field('type_table')):
                                        $loop_num += 1;
                                        $footer_title = get_sub_field('footer_title');
                                        // $url = $page_child_data['url'] . '#main' . $loop_num;
                                        $url = get_sub_field('more_link');
                                    ?>
                                    <li class="child"><a href="<?php echo $url; ?>" target="_blank"><?php echo $footer_title; ?></a></li>
                                    <?php endwhile; ?>
                                    <?php if($row_num == 0): ?><li class="child"><?php get_showroom_info(); ?></li><?php endif; ?>
                                    </ul>
                                </li>
                                <?php $loop_num += 1; $row_num += 1; endwhile; ?>
                                <li>
                                    <ul>
                                        <?php
                                            while(the_repeater_field('business_table_etc')):
                                            $footer_title = get_sub_field('footer_title');
                                            $url = $page_child_data['url'] . '#main' . $loop_num;
                                        ?>
                                        <li class="works_parent"><a href="<?php echo $url; ?>"><?php echo $footer_title; ?></a></li>
                                        <?php $loop_num += 1; endwhile; ?>
                                        <?php
                                            $buy = get_page_data(get_page_by_path('buy'));
                                        ?>
                                        <?php if($buy['lang']): ?><li class="works_parent buy"><a href="<?php echo $buy['url']; ?>"><?php echo $buy['title']; ?></a></li><?php endif; echo "\n"; ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <?php endif; ?>
                </li>
            </ul>
        </div><!-- // #site_map -->

        <div id="footer_nav">
            <ul class="foot_menu">
            	<?php
            		$contact = get_page_data(get_page_by_path('contact'));
            		$access = get_page_data(get_page_by_path('company/access'));
            		$policy = get_page_data(get_page_by_path('policy'));
            	?>
                <?php if($contact['lang']): ?><li><a href="<?php echo get_contact_page_url(); ?>" target="_blank"><?php echo $contact['title']; ?></a></li><?php endif; echo "\n"; ?>
                <?php if($access['lang']): ?><li><a href="<?php echo $access['url']; ?>"><?php echo $access['title']; ?></a></li><?php endif; echo "\n"; ?>
                <?php if($policy['lang']): ?><li><a href="<?php echo $policy['url']; ?>"><?php echo $policy['title']; ?></a></li><?php endif; echo "\n"; ?>
            </ul>

            <div class="col_right">
                <?php include_sns_share(); ?>
                <p class="copyright">Copyright &copy; PROPOLIFE INC. All Rights Reserved.</p>
            </div>
        </div>
    </div><!-- // #footer_inner -->
</div><!-- // #footer -->

</body>
</html>