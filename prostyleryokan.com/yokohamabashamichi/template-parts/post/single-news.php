
<?php get_template_part( 'template-parts/page/banner', 'sub' ); ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <div class="box_left">
          <h2 class="title">ニュース</h2>
          <div class="box_newsDetail">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </div>

        </div>

      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <?php get_sidebar(); ?>
      </div>

    </div>

  </div>
</section>