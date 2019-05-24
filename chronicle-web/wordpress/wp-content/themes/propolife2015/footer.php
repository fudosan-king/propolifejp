<?php global $current_lang; ?>
</div><!-- // #wrap -->

<div id="footer">
    <script src="https://log.ma-jin.jp/ma.js?acid=839"></script>
    <p class="btn_pagetop"><img src="<?php bloginfo('template_directory'); ?>/common/images/btn_pagetop.png" width="60" height="60" alt=""></p>
    <div id="footer_inner">
        <div id="sitemap">
            <ul>
                <li class="col_01">
                    <ul>
                        <?php $home = get_page_data(get_page_by_path('home')); ?>
                        <li><a href="/"><?php echo $home['title']; ?></a></li>
                    </ul>
                </li>
                <li class="col_02">
                    <?php
                    $page_data = get_page_data(get_page_by_path('news'));
                    $args = array('post_type' => 'page', 'sort_order' => 'asc', 'sort_column' => 'menu_order', 'exclude' => 141, 'child_of' => $page_data['id']);
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
                <li class="col_03">
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
                                <li><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用</a></li>
                                <li><a href="https://www.propolife.co.jp/group/" target="_blank">グループ企業</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php endif; ?>
                </li>
                <li class="col_04">
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
                                        <?php
                                        while(the_repeater_field('type_table')):
                                        $loop_num += 1;
                                        $footer_title = get_sub_field('footer_title');
                                        // $url = $page_child_data['url'] . '#main' . $loop_num;
                                        $url = get_sub_field('more_link');
                                        ?>
                                        <li class="works_parent"><a href="<?php echo $url; ?>" target="_blank"><?php echo $footer_title; ?></a></li>
                                        <?php endwhile; ?>
                                        <?php
                                            $pagebuy_data = get_page_data(get_page_by_path('buy'));
                                            $pagesell_data = get_page_data(get_page_by_path('perspective'));
                                         ?>
                                        <li><a href="<?php echo  $pagebuy_data['url']; ?>" target="_blank"><?php echo  $pagebuy_data['title']; ?></a></li>
                                        <li><a href="<?php echo  $pagesell_data['url']; ?>" target="_blank"><?php echo  $pagesell_data['title']; ?></a></li>
                                    </ul>
                                </li>

                                <!--
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
                                -->

                            </ul>
                        </li>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <li class="col_05">
                </li>
            </ul>
        </div><!-- // #site_map -->

        <div id="footer_nav">
            <ul class="foot_menu">
                <li><a href="https://reg31.smp.ne.jp/regist/is?SMPFORM=lgqh-ockdr-75c9de3a9898c4710f57741e460fedab&_ga=1.169896675.272080297.1488867878" target="_blank">お問い合わせ</a></li>
                <li><a href="https://www.propolife.co.jp/terms/" target="_blank">利用規約</a></li>
                <li><a href="https://www.propolife.co.jp/antisocial/" target="_blank">反社会的勢力排除に関する基本方針</a></li>
                <li><a href="https://www.chronicle-web.com/policy/" target="_blank">プライバシーポリシー</a></li>
                <li><a href="https://www.chronicle-web.com/socialmedia-policy/" target="_blank">ソーシャルメディアポリシー</a></li>
                <?php /*<li><a href="https://www.propolife.co.jp/socialpolicy/" target="_blank">ソーシャルメディア・ポリシー</a></li>*/ ?>
            </ul>

            <div class="col_right">

                <p class="copyright">Copyright &copy; CHRONICLE INC. All Rights Reserved.</p>
            </div>
        </div>
    </div><!-- // #footer_inner -->
</div><!-- // #footer -->
<?php wp_footer(); ?>
</body>
</html>
