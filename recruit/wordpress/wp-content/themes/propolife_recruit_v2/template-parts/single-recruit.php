<!-- SE: Khanh Nguyen -->
<?php 


    $pageType = null;
    switch ($post->post_type) {
        case 'newgraduate':
        case 'newgraduate-limit':
            $pageType = 'newgraduate';
            break;
        case 'career':
        case 'career-limit':
            $pageType = 'career';
            break;
    }

    $page = get_page_by_path( $pageType, $output = OBJECT, $post_type = 'page' );
    $page_title = $page->post_title;

    $recruit_process_image_pc = wp_get_attachment_image_src(get_field('recruit_process_image_pc', $page), 'large');
    $recruit_process_image_sp = wp_get_attachment_image_src(get_field('recruit_process_image_sp', $page), 'large');
    $recruit_top_text = get_field('recruit_top_text', $page);



    $recruit_entry_url = get_field('recruit_entry_url');
?>
<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/recruit/img_title_h2.png" alt="RECRUIT INFO" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/recruit/img_title_h2_sp.png" alt="RECRUIT INFO" class="sp"></h2>
        <p class="title_sub"><?php echo array_search($post->post_type, array('newgraduate-limit', 'career-limit')) >= 0 ? "【".$page_title."】勤務地限定":$page_title; ?><span class="line"></span></p>
    </div>
    
    <div id="page_recruit">
        <h3><?php the_title(); ?></h3>
        <p class="top_text"><?php echo $recruit_top_text; ?></p>
        
        <div class="recruit_table">
            <table>
<?php
while(the_repeater_field('recruit_repeater_field')):
$recruit_title = get_sub_field('recruit_title');
$recruit_text = get_sub_field('recruit_text');
?>
                <tr>
                    <th><?php echo $recruit_title; ?></th>
                    <td><?php echo $recruit_text; ?></td>
                </tr>
<?php endwhile; ?>
                <tr>
                    <th>応募方法</th>
                    <td>
                        <div class="entry_desc">
                            <?php echo get_field('recruit_entry_text'); ?>
                        </div>
                        <p class="btn_entry"><a href="<?php echo $recruit_entry_url; ?>" target="_blank"><img src="<?php echo $temp_dir; ?>/common/images/recruit/btn_entry_pc.png" alt="エントリーフォーム" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/recruit/btn_entry_sp.png" alt="エントリーフォーム" class="sp"></a></p>
                        <div class="entry_address">
                            <p>応募先</p>
                            <?php echo get_field('recruit_entry_address'); ?>
                        </div>
                        <div class="entry_caution">
                            <?php echo get_field('recruit_entry_caution'); ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div><!-- // .recruit_table -->
        
        <p class="img_process"><img src="<?php echo $recruit_process_image_pc[0]; ?>" alt="" class="pc"><img src="<?php echo $recruit_process_image_sp[0]; ?>" alt="" class="sp"></p>
    </div><!-- // #page_recruit -->

</div><!-- // #contents_inner -->
</div><!-- // #contents -->