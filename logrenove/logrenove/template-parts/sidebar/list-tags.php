<div class="each_boxright">
    <h2>気になるキーワード</h2>
    <div class="each_boxright_content">
        <?php 
            $tags = get_tags(array(
              'hide_empty' => false
            ));

            $html = '<ul class="list_tag">';
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );

                $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}' target='_blank'>";
                $html .= "#{$tag->name}</a></li>";
            }
            $html .= '</ul>';
            echo $html;
        ?>
        
    </div>
</div>