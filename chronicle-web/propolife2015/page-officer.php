<?php
$dir_name = 'officer';
$dir_category = 'company';
?>
<?php get_header(); ?>
<div id="contents">
    
<?php show_topicpath(); ?>
    
    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/officer/img_title_h2.png" alt="OFFICER"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>
    
    <div id="contents_inner">
        <?php
            while(the_repeater_field('officer_table')):
            $position_name = get_sub_field('position');
        ?>
        <h3><?php echo $position_name; ?></h3>
        <table>
            <?php
                $row_num = 0;
                while(the_repeater_field('position_table')):
                $th = get_sub_field('table_title');
                $td = get_sub_field('table_content');
                $col_bg = ($row_num % 2 == 0)? true: false;
            ?>
            <tr<?php if($col_bg): echo ' class="bg"'; endif; ?>>
                <th><?php echo $th; ?></th>
                <td><?php echo $td; ?></td>
            </tr>
            <?php $row_num += 1; endwhile; ?>
        </table>
        <?php endwhile; ?>
    </div>
    
 </div><!-- // #contents -->
<?php get_footer(); ?>