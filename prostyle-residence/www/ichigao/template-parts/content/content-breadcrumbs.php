<section class="section_breakcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo get_site_url() ?>">TOP</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_site_url() ?>#<?php echo get_the_category()[0]->slug; ?>"><?php echo get_cat_name(get_the_category()[0]->term_id) ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo trim_text(get_the_title(), 20) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>