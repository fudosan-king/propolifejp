<?php if ( is_front_page() ) : ?>

<div class="note-image">
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/bn-livenow.jpg" alt="平置駐車場優先権1台有り×即入居可">
</div>

<div class="banner-area">
  <ul class="top-banner">
    <li><a href="javascript:newWindown_planC()"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/btn-top02.jpg" alt="2LDK x LDK 17.5帖 x 65m2超 = 6,598万円〜"></a></li>
    <li><a href="javascript:newWindown_planD()"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/btn-top03.jpg" alt="3LDK x 3面採光角住戸 x 70m2超 = 7,898万円〜"></a></li>
  </ul>

  <div class="top-campaign-box">
    <div class="inner">
	    <p class="notice">※詳しくは係員までお尋ねください。</p>
	  </div>
	</div>
  <div class="top-content">
    <div class="right-cont">
      <div class="bn"><a href="https://www.prostyle-residence.com/nihonbashibakurocho/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/bn-bakurotyou.jpg" alt="プロスタイル日本橋馬喰町 公式ホームページはこちら"></a></div>
      <div class="bn"><a href="<?php echo esc_url( home_url( '/real/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/bn-real.jpg" alt="完成物件購入の魅力 実物が見学できる安心の販売形式です"></a></div>
    </div>
    <div class="top-information">
      <h4><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/ttl-information.jpg" alt="Information"></h4>
      <div class="inner">
        <?php
          $info_args = array(
            'post_type'   => 'info',
            'post_status' => 'publish',
          );

          $i = new WP_Query( $info_args );
        ?>
        <ul>
          <?php if ( $i->have_posts() ) : while ( $i->have_posts() ) : $i->the_post(); ?>
          <li><?php the_content(); ?></li>
          <?php endwhile; wp_reset_postdata(); else : ?>
          <li>お知らせはありません。</li>
          <?php endif; ?>
        </ul>
      </div>
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/top/bn-top-campaign02.jpg" alt=""> <br><br>
      <div align="center">販売中のモデルルームは当物件の604号室となります。</div>
    </div>
  </div>
  <?php
    if ( is_front_page() || is_page() ) :
      if ( get_field( 'ad-disp' ) ) : ?>
  <div class="notice-ad">
    <?php the_field( 'ad-text' ); ?>
  </div>
  <?php endif; endif; ?>
</div>
<?php endif;
