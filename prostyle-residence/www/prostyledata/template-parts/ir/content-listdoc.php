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
                            <h3 class="p-title01"><?php echo $text; ?></h3>
                            <hr>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <?php 
                                if(have_rows('info_display')):
                                    echo '<div class="row">';
                                    while(have_rows('info_display')): the_row();
                                        $file = get_sub_field('file');
                                        if($file):
                                            $fileSize = ' ('.size_format(filesize(get_attached_file( $file['ID']))).')';
                                            $extImage = $file['subtype'] == 'pdf' ? SGVinK::get_images_uri()."ext/img_".$file['subtype'].".png" : $file['icon'];
                                            ?>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                    <!-- <article class="docItem">
                                                        <a href="<?php echo $file['link']; ?>" target="_blank"><img src="<?php echo $extImage; ?>" class="img-fluid" alt=""></a>
                                                        <div class="title"><?php echo $file['title'].$fileSize; ?></div>
                                                        <div class="caption"><?php echo $file['caption'] ?></div>
                                                        <div class="description"><?php echo $file['description'] ?></div>
                                                    </article> -->

                                                    <a href="<?php echo $file['link']; ?>" target="_blank"> 
                                                        <span class="p-text"><?php echo $file['title']; ?></span> 
                                                        <img src="<?php echo $extImage; ?>" alt="PDF"> <?php echo $fileSize; ?>
                                                    </a>
                                                   
                                               </div>
                                               
                                            <?php
                                        endif;
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
endif; ?>