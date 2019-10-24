<?php 
    if(is_page('ir')):

        if(have_rows('info_flexible_content')):
            $counter = 0;
            $field_object = get_field_object('info_flexible_content');
            $total_rows = count($field_object['value']);
            while(have_rows('info_flexible_content')): the_row();
                $counter++;
                
                if( get_row_layout() == 'info_block' ):
                    $text = get_sub_field('title');
                    echo '<div class="row">';
                    ?>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h3><?php echo $text; ?></h3>
                            <hr>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <?php 
                                if(have_rows('info_display')):
                                    echo '<div class="row">';
                                    while(have_rows('info_display')): the_row();
                                        $file = get_sub_field('file');
                                        $fileSize = ' ['.size_format(filesize(get_attached_file( $file['ID']))).']';
                                        $extImage = $file['subtype'] == 'pdf' ? SGVinK::get_images_uri()."ext/file_".$file['subtype'].".png" : $file['icon'];
                                        ?>
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                                                <article class="docItem">
                                                    <a href="<?php echo $file['link']; ?>" target="_blank"><img src="<?php echo $extImage; ?>" class="img-fluid" alt=""></a>
                                                    <div class="title"><?php echo $file['title'].$fileSize; ?></div>
                                                    <div class="caption"><?php echo $file['caption'] ?></div>
                                                    <div class="description"><?php echo $file['description'] ?></div>
                                                </article>
                                               
                                           </div>
                                           
                                        <?php
                                    endwhile;
                                    echo '</div>';
                                else:
                                    ?>
                                        <p>現在、公告事項はありません。</p>
                                    <?php
                                endif;
                            ?>
                        </div>
                    <?php
                    echo '</div>';
                    echo $counter != $total_rows ? '<br><br>' : '';
                endif;
            endwhile;
            
        endif;

    endif;
?>


    
        
    
