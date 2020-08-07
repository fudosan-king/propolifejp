<?php
/*Template Name: Outline - Page Template*/
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/banner', 'top' ); ?>

<?php 
    $group = get_field('outline_content');
    $table_content = $group['table_content'];
?>

<main>
    <section class="section_notation mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if (!empty($table_content)): ?>
                        <h2 class="title"><?php echo $group['title']; ?></h2>
                        <table class="table table-bordered table-striped table_notation">
                            <?php 
                                foreach ($table_content as $field){
                                    echo '<tr>
                                        <th>'.$field['name'].'</th>
                                        <td>'.$field['value'].'</td>
                                    </tr>';
                                };
                            ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>