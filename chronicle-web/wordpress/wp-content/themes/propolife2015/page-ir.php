<?php
$dir_name = 'ir';
// $dir_category = 'company';
?>
<?php
$post_id = $post -> ID;
?>
<?php get_header(); ?>
<div id="contents">

    <?php show_topicpath(); ?>

    <div id="section_title">
        <h2><img src="<?php bloginfo('template_directory'); ?>/common/images/ir/img_title_h2.png" alt="IR"></h2>
        <p class="ruby"><?php the_title(); ?></p>
        <p class="line"></p>
    </div>

    <div id="contents_inner">
        <!--
<table>
<tr class="bg">
<th>会社名</th>
<td>株式会社プロポライフ</td>
</tr>
<tr class="bg">
<th>所在地</th>
<td>東京都千代田区丸の内２－３－２　郵船ビルディング２Ｆ </td>
</tr>
</table>
-->

        <div class="p-box">
            <h3 class="p-title01">
                電子公告
            </h3>
            <div class="p-container">
                <table>
                    <?php
                    $paged = get_query_var('paged')? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'ir',
                        'posts_per_page' => -1,
                        'paged' => $paged,
                        'post_status' => 'publish',
                    ); ?>
                    <?php $wp_query = new WP_Query( $args ); ?>
                    <?php if( $wp_query->have_posts() ) : ?>
                    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                    <tr>
                        <th>
                            <?php the_time('Y年n月j日'); ?>
                        </th>
                        <td id="post-<?php the_ID(); ?>">
                            <a href="<?php echo the_permalink(); ?>" target="_blank">
                                <span class="p-text"><?php the_title(); ?></span>
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/ir/img_pdf.png" alt="PDF">
                                <?php
                                $url = get_post_meta($post->ID,'vk-ltc-link',true);
                                $pdf_url = attachment_url_to_postid($url);
                                echo "（".size_format(filesize(get_attached_file($pdf_url)))."）";
                                ?>
                            </a>
                        </td>
                    </tr>

                    <?php endwhile; ?>
                    <?php else: ?>
                    <tr>
<!-- 						<td><u>現在、決算公告以外の公告事項はありません。</u></td> -->
                        <td id="post-3307">
                            <a href="https://www.chronicle-web.com/wordpress/wp-content/uploads/1218capital_kokoku.pdf" target="_blank"> <span class="p-text">資本金の額の減少公告</span> <img src="<?php echo get_template_directory_uri(); ?>/common/images/ir/img_pdf.png" alt="PDF"> （73.2 KB）</a>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </table>
            </div>
        </div>

        <div class="p-box">
            <h3 class="p-title02">
                <?php if (qtrans_getLanguage() == 'ja'): ?>
                決算公告
                <?php elseif (qtrans_getLanguage() == 'en'): ?>
                Account settlement notice
                <?php elseif (qtrans_getLanguage() == 'cn'): ?>
                截止公告
                <?php endif; ?>
            </h3>
			<div class="p-container">
				<table>
					<tr>
						<td id="post-3307">
							<a href="https://www.chronicle-web.com/wordpress/wp-content/uploads/201602.pdf" target="_blank"> <span class="p-text">平成28年2月期</span> <img src="<?php echo get_template_directory_uri(); ?>/common/images/ir/img_pdf.png" alt="PDF"> （73.3 KB）</a>
						</td>
					</tr>
                    <tr>
                        <td id="post-3307">
                            <a href="https://www.chronicle-web.com/wordpress/wp-content/uploads/1207.pdf" target="_blank"> <span class="p-text">平成30年3月期</span> <img src="<?php echo get_template_directory_uri(); ?>/common/images/ir/img_pdf.png" alt="PDF"> （55.0 KB）</a>
                        </td>
                    </tr>
                    <tr>
                        <td id="post-3307">
                            <a href="https://www.chronicle-web.com/wordpress/wp-content/uploads/Chronicle-13th-Financial-Report.pdf" target="_blank"> <span class="p-text">平成31年3月期</span> <img src="<?php echo get_template_directory_uri(); ?>/common/images/ir/img_pdf.png" alt="PDF"> （170.0 KB ）</a>
                        </td>
                    </tr>
				</table>
			</div>
        </div>

    </div>

</div><!-- // #contents -->
<?php get_footer(); ?>
