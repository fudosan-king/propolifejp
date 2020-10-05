<section class="section_breakcrum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php //the_breadcrumb(); ?>
                <?php
                global $detect;
                if(!$detect->isMobile()){
                    if ( function_exists('the_breadcrumb') ) {
                        the_breadcrumb();
                    }
                }
                ?>
            </div>
        </div>

    </div>
</section>