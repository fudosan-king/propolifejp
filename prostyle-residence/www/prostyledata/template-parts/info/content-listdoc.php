<?php 
    if(is_page('info')):

        if(have_rows('info_display')):
            echo '<div class="row">';
            while(have_rows('info_display')): the_row();
                $file = get_sub_field('file');
                $extImage = $file['subtype'] == 'pdf' ? SGVinK::get_images_uri()."ext/file_".$file['subtype'].".png" : $file['icon'];


                ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                        <article class="docItem">
                            <a href="<?php echo $file['link']; ?>" target="_blank"><img src="<?php echo $extImage; ?>" alt=""></a>
                            <div class="title"><?php echo $file['title'] ?></div>
                            <div class="caption"><?php echo $file['caption'] ?></div>
                            <div class="description"><?php echo $file['description'] ?></div>
                        </article>
                       
                   </div>
                   
                <?php
            endwhile;
            echo '</div>';
        endif;

    endif;
?>


    
        
    
