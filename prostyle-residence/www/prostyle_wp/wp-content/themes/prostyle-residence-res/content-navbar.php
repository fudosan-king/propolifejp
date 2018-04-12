

<nav class = "navbar navbar-default" role = "navigation">

    <div class = "navbar-header">
        <button type = "button" class = "navbar-toggle"
        data-toggle = "collapse" data-target = "#example-navbar-collapse">
            <span class = "sr-only">Toggle navigation</span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button>

        <a class = "navbar-brand"  href="/"><img src="<?php echo get_template_directory_uri()."/img/common/logo.png"; ?>" alt="<?php the_title(); ?>" /></a>
    </div>

    <div class = "collapse navbar-collapse" id = "example-navbar-collapse">

        <ul class = "nav navbar-nav">
            <?php

                $menu_header = wp_get_nav_menu_items('header-menu');
                foreach($menu_header as $m){
                    ?>
                        <li><a href="<?php echo $m->url ?>" target="<?php echo $m->target; ?>"><?php echo $m->title; ?></a></li>
                    <?php
                }
            ?>
        </ul>
    </div>

</nav>

