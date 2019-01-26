<?php 
/*Template Name: Home Page*/
?>

<?php get_header(); ?>

<?php 

  if (have_rows('block_content')): 
      while(have_rows('block_content')): the_row();
        switch (get_row_layout()) {
          case 'propolife_group':
            propolife_group_content(get_row_layout());
            break;
          
          case 'wood_magic':
           wood_magic_content(get_row_layout());
            break;

          case 'order_made':
           order_made_content(get_row_layout());
            break;

          case 'fitting_and_materials':
            fitting_and_materials_content(get_row_layout());
            break;

          case 'contents':
           contents_content(get_row_layout());
            break;
        }
      endwhile;
  endif;

?>


<?php 

function propolife_group_content($layout_name){
  $image = get_sub_field('propolife_group_logo');
  $img_link = wp_get_attachment_image_url( $image['ID'], $size = 'large', $icon = false );
  
  ?>
    <div class="container-fluid p-0 ">
      <div class="row banner no-gutters">
        <div class="col align-self-center box_text_banner">
          <h4><?php echo acf_get_layout_label('block_content', $layout_name) ?></h4>
          <a class="logo" href="/"><img src="<?php echo $img_link; ?>" alt="" class="img-fluid"></a>
          <p><?php echo get_sub_field('propolife_group_text'); ?></p>
        </div>
        <div class="cover"></div>
        <span class="scroll">Scroll</span>
      </div>
    </div>
  <?php
}

function wood_magic_content($layout_name){
  $image = get_sub_field('wood_magic_image');
  $img_link = wp_get_attachment_image_url( $image['ID'], $size = 'large', $icon = false );
  ?>
    <section class="section_woodMagic">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-sm-12">
            <h2 class="title"><?php echo acf_get_layout_label('block_content', $layout_name); ?></h2>
            <p class="subtext"><?php echo get_sub_field('wood_magic_title'); ?></p>
          </div>
          <div class="col col-12 col-sm-5">
            <div class="box_text_woodMagic">
              <p><?php echo get_sub_field('wood_magic_content'); ?></p>

              <?php if (!empty(get_sub_field('wood_magic_link'))): ?>
              <a href="<?php  echo get_sub_field('wood_magic_link')['url']; ?>" class="btn btnintro" target="<?php  echo get_sub_field('wood_magic_link')['target']; ?>"><?php echo get_sub_field('wood_magic_link')['title']; ?></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col col-12 col-sm-7">
            <img src="<?php echo $img_link; ?>" alt="" class="img-fluid w-100 box_shadow">
          </div>
        </div>
      </div>
    </section>
  <?php
}

function order_made_content($layout_name){
  $gallery = get_sub_field('order_made_gallery');
  ?>
    <section class="section_orderMade">
      <div class="swiper-container swiper_orderMade">
        <div class="swiper-wrapper">
          <?php 
          foreach($gallery as $img){
            ?>
             <div class="swiper-slide">
              <img src="<?php echo $img['url']; ?>" alt="" class="img-fluid">
            </div>
            <?php
          }
          ?>
         
          
        </div>
        <!-- Add Arrows -->
            <!-- <div class="swiper-button-next swiper-button-white"></div>
              <div class="swiper-button-prev swiper-button-white"></div> -->
            </div>

            <div class="orderMade_content">
              <h2 class="title"><?php echo acf_get_layout_label('block_content', $layout_name); ?></h2>
              <p class="subtext"><?php echo get_sub_field('order_made_title'); ?></p>
              <p><?php echo get_sub_field('order_made_content'); ?></p>

              <?php if (!empty(get_sub_field('order_made_link'))): ?>
              <a href="<?php echo get_sub_field('order_made_link')['url'] ?>" class="btn btnOrder" target="<?php echo get_sub_field('order_made_link')['target'] ?>"><?php echo get_sub_field('order_made_link')['title'] ?></a>
              <?php endif; ?>
            </div>

            <h4 class="brands d-none d-md-block"><?php echo get_sub_field('order_made_tag'); ?></h4>

          </section>
  <?php
}

function fitting_and_materials_content($layout_name){
  global $post;
  $args = woo_agr_get_all_product_with_taxonomy(array('door', 'fittings', 'flooring'));
      
  $query = new WP_Query( $args );
  ?>
    <section class="section_fittingMaterials">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-sm-12">
            <h2 class="title"><?php echo acf_get_layout_label('block_content', $layout_name) ?></h2>
            <p class="subtext"><?php echo get_sub_field('fitting_and_materials_title'); ?></p>
          </div>
        </div>
        <div class="row">

          <?php 

            if($query->have_posts()):
              while($query->have_posts()): $query->the_post();
                $product = wc_get_product($post->ID);
                $image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), $size = 'large', $icon = false );
                $is_top_front = get_field('spec_product');

                if ($is_top_front == 'True'){
                ?>
                  <div class="col col-6 col-sm-4 pad_custom">
                    <div class="fittingMaterials_item">
                      <a href="<?php the_permalink(); ?>" title="" target="_blank">
                        <img class="img-fluid" src="<?php echo $image; ?>" alt="">
                        <?php 
                          if (!empty(get_field('tag_extra')) && array_search('event', get_field('tag_extra'))>=0) 
                            echo '<span class="event">Event</span>';
                         ?>
                          
                      </a>
                      
                      <?php if (!empty($product->get_attribute('size')) || !empty($product->get_price_html())): ?>
                      <p class="name">
                        <?php if (!empty($product->get_attribute('size'))): ?>
                        <span>樹木</span> <?php echo $product->get_attribute('size'); ?> / 
                        <?php endif; ?>
                        
                        <?php if (!empty($product->get_price_html())): ?>
                        <span>価格</span> <?php echo $product->get_price_html(); ?>
                        <?php endif; ?>

                      </p>
                      <?php endif; ?>

                    </div>
                  </div>
                <?php
                }
              endwhile;
              wp_reset_postdata();
              wp_reset_query();
            endif;

          ?>
          
          <?php if (!empty(get_sub_field('fitting_and_materials_link'))): ?>
          <div class="col col-12 col-sm-12 text-center">
            <a href="<?php echo get_sub_field('fitting_and_materials_link')['url']; ?>" class="btn btnViewall" target="<?php echo get_sub_field('fitting_and_materials_link')['target']; ?>"><?php echo get_sub_field('fitting_and_materials_link')['title']; ?></a>
          </div>
          <?php endif; ?>

      </div>
    </section>
  <?php
}

function contents_content($layout_name){

  ?>
    <section class="section_Contents">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-sm-12">
            <h2 class="title"><?php echo acf_get_layout_label('block_content', $layout_name) ?></h2>
            <p class="subtext"><?php echo get_sub_field('contents_title'); ?></p>
          </div>

          <?php
            if (have_rows('sub_content')):
              while(have_rows('sub_content')): the_row();
                $image = get_sub_field('sub_content_image');
                $img_link = wp_get_attachment_image_url( $image['ID'], $size = 'large', $icon = false );
                
                ?>
                  <div class="col col-6 col-sm-4">
                    <div class="contents_item">
                      
                      <?php if (!empty(get_sub_field('sub_content_link'))): ?>
                      <a href="<?php echo get_sub_field('sub_content_link')['url']; ?>" title="" target="<?php echo get_sub_field('sub_content_link')['target']; ?>"><img class="img-fluid w-100" src="<?php echo $img_link; ?>" alt=""></a>
                      <?php endif; ?>

                      <h4><?php echo $image['title']; ?></h4>
                      <p><?php echo $image['description']; ?></p>
                    </div>
                  </div>
                <?php
              endwhile;
            endif;
          ?>
          
        </div>
      </div>
    </section>
  <?php
}

?>

<?php get_footer(); ?>
