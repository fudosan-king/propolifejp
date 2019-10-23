<main>
    <?php 
        if (is_singular()){
            $displayMethod = get_field('display_method') !== null && !empty(get_field('display_method')) ? get_field('display_method') : 'default';
            echo '<h5>'.$displayMethod.'</h5>';
            switch ($displayMethod) {
                case 'static':
                    get_template_part( 'template-parts/post/single', 'special' );
                    break;
                
                default:
                    get_template_part( 'template-parts/post/single', 'news' );
                    break;
            }
        }
    ?>
</main>