<!-- SE: Khanh Nguyen -->
<?php
    $page_title = get_post_type_object(get_post_type())->label;
    $page_id = get_page_by_path('newgraduate')->ID;

    $recruit_process_image_pc = wp_get_attachment_image_src(get_field('recruit_process_image_pc', $page_id), 'large');
    $recruit_process_image_sp = wp_get_attachment_image_src(get_field('recruit_process_image_sp', $page_id), 'large');
    $recruit_top_text = get_field('recruit_top_text', $page_id);
?>

<?php
$recruit_entry_url = get_field('recruit_entry_url');
?>
<div id="contents">
<div id="contents_inner">

    <div id="page_title">
        <h2><img src="<?php echo $temp_dir; ?>/common/images/recruit/img_title_h2.png" alt="RECRUIT INFO" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/recruit/img_title_h2_sp.png" alt="RECRUIT INFO" class="sp"></h2>
        <p class="title_sub"><?php echo $post->post_title; ?><span class="line"></span></p>
    </div>

    <div id="page_recruit">
        <h3>募集要項</h3>
        <p class="top_text"><?php echo $recruit_top_text; ?></p>

        <div class="recruit_table">
            <table>
<?php
// while(the_repeater_field('recruit_repeater_field')):
// $recruit_title = get_sub_field('recruit_title');
// $recruit_text = get_sub_field('recruit_text');
?>
               <!--  <tr>
                    <th><?php //echo $recruit_title; ?></th>
                    <td><?php //echo $recruit_text; ?></td>
                </tr> -->
<?php //endwhile; ?>

                <?php
                    $recruit_info_target = get_field('recruit_info_target');
                    $fieldObj = get_field_object('recruit_info_target');
                    if(!empty($recruit_info_target)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_target.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_personalities = get_field('recruit_info_personalities');
                    $fieldObj = get_field_object('recruit_info_personalities');
                    if(!empty($recruit_info_personalities)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_personalities.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_salary = get_field('recruit_info_salary');
                    $fieldObj = get_field_object('recruit_info_salary');
                    if(!empty($recruit_info_salary)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_salary.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_assessment = get_field('recruit_info_assessment');
                    $fieldObj = get_field_object('recruit_info_assessment');
                    if(!empty($recruit_info_assessment)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_assessment.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_bonus = get_field('recruit_info_bonus');
                    $fieldObj = get_field_object('recruit_info_bonus');
                    if(!empty($recruit_info_bonus)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_bonus.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_qualified = get_field('recruit_info_qualified');
                    $fieldObj = get_field_object('recruit_info_qualified');
                    if(!empty($recruit_info_qualified)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_qualified.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_allowances = get_field('recruit_info_allowances');
                    $fieldObj = get_field_object('recruit_info_allowances');
                    if(!empty($recruit_info_allowances)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_allowances.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_vacation = get_field('recruit_info_vacation');
                    $fieldObj = get_field_object('recruit_info_vacation');
                    if(!empty($recruit_info_vacation)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_vacation.'</td></tr>';
                    }
                ?>


                <?php
                    $recruit_info_working_hours = get_field('recruit_info_working_hours');
                    $fieldObj = get_field_object('recruit_info_working_hours');
                    if(!empty($recruit_info_working_hours)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_working_hours.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_location = get_field('recruit_info_location');
                    $fieldObj = get_field_object('recruit_info_location');
                    if(!empty($recruit_info_location)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_location.'</td></tr>';
                    }
                ?>

                <?php
                    $recruit_info_welfare = get_field('recruit_info_welfare');
                    $fieldObj = get_field_object('recruit_info_welfare');
                    if(!empty($recruit_info_welfare)){
                        echo '<tr><th>'.$fieldObj['label'].'</th><td>'.$recruit_info_welfare.'</td></tr>';
                    }
                ?>
                <tr>
                    <th>応募方法</th>
                    <td>
                        <div class="entry_desc">
                            <?php echo get_field('recruit_entry_text'); ?>
                        </div>
                        <p class="btn_entry"><a href="<?php echo $recruit_entry_url; ?>" target="_blank"><img src="<?php echo $temp_dir; ?>/common/images/recruit/btn_entry_pc.png" alt="エントリーフォーム" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/recruit/btn_entry_sp.png" alt="エントリーフォーム" class="sp"></a></p>
                        <div class="entry_address">
                            <p>応募先</p>
                            <?php //echo get_field('recruit_entry_address'); ?>
                            <p>〒107-0061 <br>
                            東京都港区北⻘⼭3-6-23</p>
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

