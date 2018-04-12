
        <footer>
            <div class="row">

                <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="fb_plugin">
                        <div class="fb-page" data-href="https://www.facebook.com/prostyleresidence/" data-tabs="timeline" data-width="500" data-height="275" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/prostyleresidence/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/prostyleresidence/">株式会社プロスタイル</a></blockquote></div>
                    </div>
                </div> -->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="foot_tel">
                        <h3>お問い合わせ</h3>
                        <p>
                            <img class="pri" src="<?php echo get_template_directory_uri()."/img/common/tel_blown.png" ?> " alt="tel:0800-111-1678" / >
                            <a class="extra" href="tel:0800-111-1678"><img src="<?php echo get_template_directory_uri()."/img/common/tel_blown.png" ?> " alt="tel:0800-111-1678" / ></a><br />
                            受付時間／10:00〜19:00　定休日／水曜日※祝日を除く<br />
                            携帯電話・PHSからもご利用いただけます。
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="footer">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h2><a href="/">
                                    <?php
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                        if ( has_custom_logo() ) {
                                            ?>
                                                <img src="<?php echo esc_url( $logo[0] ) ?> " width="360px" class="bt_center" alt="" />
                                            <?php
                                        } else {
                                                echo get_bloginfo( 'name' );
                                        }
                                     ?>


                                </a></h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu',
                                        'menu_class' => 'menu_foot'
                                        )
                                    );
                                ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <address>Copyright &copy; PROSTYLE INC. All rights reserved.</address>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>
    </div>

</body>
</html>
