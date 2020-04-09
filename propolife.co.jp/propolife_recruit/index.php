<?php
global $temp_dir;
$dir_name = 'home';
?>
<?php include_once('header.php'); ?>
<?php include_once('sub_navigation.php'); ?>

<div id="page_home">
    
    <div id="main_visual">
        <div id="main_visual_inner">
            <p class="main_visual_sp switch_sp"><img src="<?php echo $temp_dir; ?>/common/images/home/img_main_visual_sp.jpg" alt=""></p>
            <h1><img src="<?php echo $temp_dir; ?>/common/images/home/img_main_logo.png" alt="PROPOLIFE GROUP RECRUIT SITE PROPO LAND" class="pc"><img src="<?php echo $temp_dir; ?>/common/images/home/img_main_logo_sp.png" alt="PROPOLIFE GROUP RECRUIT SITE PROPO LAND" class="sp"></h1>
            
            <div id="animal_element">
                <p class="animal_giraffe f_anim" data-anim="31" data-loop="0"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/giraffe/img_anim_giraffe_f01.png" alt=""></p>
                <p class="animal_rhino f_anim" data-anim="28" data-loop="1"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/rhino/img_anim_rhino_f01.png" alt=""></p>
                <p class="animal_panda f_anim" data-anim="16" data-loop="0"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/panda/img_anim_panda_f01.png" alt=""></p>
                <p class="animal_gorilla f_anim" data-anim="20" data-loop="0"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/gorilla/img_anim_gorilla_f01.png" alt=""></p>
                <p class="animal_coala f_anim" data-anim="20" data-loop="0"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/coala/img_anim_coala_f01.png" alt=""></p>
                <p class="animal_elephant f_anim" data-anim="26" data-loop="0"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/elephant/img_anim_elephant_f01.png" alt=""></p>
                <p class="animal_lion f_anim" data-anim="28" data-loop="1"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/lion/img_anim_lion_f01.png" alt=""></p>
                <p class="animal_zebra f_anim" data-anim="21" data-loop="0"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/zebra/img_anim_zebra_f01.png" alt=""></p>
                <p class="animal_deer f_anim" data-anim="16" data-loop="0"><img src="<?php echo $temp_dir; ?>/common/images/home/animal/deer/img_anim_deer_f01.png" alt=""></p>
            </div><!-- #animal_element -->
            
            <div id="btn_list">
                <p class="btn_job"><a href="<?php echo home_url(); ?>/job/"><img src="<?php echo $temp_dir; ?>/common/images/home/btn_home_job.png" alt="プロポのお仕事"></a></p>
                <p class="btn_concept"><a href="<?php echo home_url(); ?>/concept/"><img src="<?php echo $temp_dir; ?>/common/images/home/btn_home_concept.png" alt="メッセージ"></a></p>
                <p class="btn_recruit"><a href="<?php echo home_url(); ?>/newgraduate/"><img src="<?php echo $temp_dir; ?>/common/images/home/btn_home_recruit.png" alt="採用情報"></a></p>
                <p class="btn_point"><a href="<?php echo home_url(); ?>/point/"><img src="<?php echo $temp_dir; ?>/common/images/home/btn_home_point.png" alt="企業を知る"></a></p>
                <p class="btn_benefit"><a href="<?php echo home_url(); ?>/benefit/"><img src="<?php echo $temp_dir; ?>/common/images/home/btn_home_benefit.png" alt="福利厚生"></a></p>
            </div><!-- #btn_list -->

            <p class="btn_entry"><a href="https://www.propolife.co.jp/recruit/contact/" target="_blank"></a></p>
    
        </div><!-- // #main_visual_inner -->
    </div><!-- // #main_visual -->

    <div id="sp_global_nav" class="switch_sp">
        <ul>
            <li class="concept"><a href="<?php echo home_url(); ?>/concept/"></a></li>
            <li class="job"><a href="<?php echo home_url(); ?>/job/"></a></li>
            <li class="recruit">
                <p class="parents"></p>
                <ul>
                    <li class="recruit_new"><a href="<?php echo home_url(); ?>/newgraduate/"></a></li>
                    <li class="recruit_career"><a href="<?php echo home_url(); ?>/career/"></a></li>
                </ul>
            </li>
            <li class="benefit"><a href="<?php echo home_url(); ?>/benefit/"></a></li>
            <li class="point"><a href="<?php echo home_url(); ?>/point/"></a></li>
        </ul>
    </div><!-- // #sp_global_nav -->

    
</div><!-- // #page_home -->

<?php get_footer(); ?>

<style>
#btn_list .btn_recruit {
    top: 298px;
    left: 561px;
}

#btn_list .btn_job {
    top: 362px;
    left: 95px;
}

#btn_list .btn_point {
    top: 612px;
    left: 504px;
}

#btn_list .btn_training {
    top: 683px;
    left: 86px;
}

#btn_list .btn_concept {
    top: 520px;
    left: 10px;
}
</style>