<?php 
    if (have_rows('distribution_control')):
        echo '
            <section class="section_distribution_record project">
                <div class="w_section_distribution_record">
                    <div class="container">
                        <div class="row">
                            <div class="col col-sm-12">
                                

                                <div class="table_custom">
        ';
                                while(have_rows('distribution_control')): the_row();
                                    echo '
                                        <div class="row w_row_custom">
                                    ';

                                    echo '
                                            <div class="col col-12 col-sm-2 w_table_title">
                                                <span class="table_title">'.get_sub_field('brand_name').'</span>
                                            </div>
                                    ';

                                    $tableContent = get_sub_field('record')['body'];

                                    if(!empty($tableContent)):

                                        echo '
                                            <div class="col col-12 col-sm-10">
                                        ';

                                        foreach($tableContent as $row){
                                            echo '
                                                <div class="row row_custom">
                                            ';
                                            foreach($row as $index => $col){

                                                $colClass = 'col col-4 col-sm-3';
                                                switch ($index + 1) {

                                                    case 2:
                                                        $colClass = 'col col-8 col-sm-4';
                                                        break;

                                                    case 3:
                                                        $colClass = 'col col-9 col-sm-4';
                                                        break;

                                                    case 4:
                                                        $colClass = 'col col-3 col-sm-1';
                                                        break;
                                                }

                                                echo '
                                                    <div class="'.$colClass.'">
                                                        '.$col['c'].'
                                                    </div>
                                                ';
                                            }
                                            echo '
                                                </div>
                                            ';

                                        }

                                        echo '
                                            </div>
                                        ';

                                    endif;

                                    echo '
                                        </div>
                                    ';
                                endwhile;
        echo '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ';
    endif;
?>