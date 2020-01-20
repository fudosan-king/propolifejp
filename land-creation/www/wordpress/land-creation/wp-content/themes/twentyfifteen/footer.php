<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
		<?php if (!( is_single() )) : ?>
			</div><!-- .site-content -->
		<?php endif; ?>
	<div id="sidebar" class="side">

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->
  </div>
</div>
</div><!-- .site -->
<footer>
<div class="btnbar wrapper">
  <a class="btn" href="/search"><img src="https://www.landcreation.co.jp/static/img/common/ftr_btn_search.png" width="472" height="120" alt=""/></a>
  <a href="/contact" class="btn"><img src="https://www.landcreation.co.jp/static/img/common/ftr_btn_contact.png" width="472" height="120" alt=""/></a>
</div>


<div class="footer">
  <p class="fnavi">　<a href="https://www.landcreation.co.jp/">ホーム</a>　|　<a href="https://www.landcreation.co.jp/search">売買検索</a>　| <a href="https://www.landcreation.co.jp/search_rent/">賃貸検索</a>　|　<a href="https://www.landcreation.co.jp/renovation/index.html">建築・リノベーション</a>　|　<a href="https://www.landcreation.co.jp/knowledge/index.html">住宅購入の基礎知識</a>　|　<a href="https://www.landcreation.co.jp/rental/index.html">賃貸管理</a>　|　<a href="https://www.landcreation.co.jp/conference/index.html">競売代行・任意売却相談</a>　|　<a href="https://www.landcreation.co.jp/blog" class="now">ブログ</a>　|　<a href="/company/index.html">会社概要</a>　</p>
  <div class="wrapper infobar">
    <div class="logo"><a href="https://www.landcreation.co.jp/"><img src="https://www.landcreation.co.jp/static/img/common/logo_mark.png" width="72" height="56" alt=""/></a></div>
    <p class="info">株式会社ランドクリエイション<br>
      〒330-0061<br>
      埼玉県さいたま市浦和区常盤4-5-12<br>
      営業時間　9:00〜19:00<br>
      定休日　毎週水曜日</p>
  </div>
  <p class="copyright">Copyright (C) ランドクリエイション INC. ALL rights reserved.</p>
</div>

</footer>



<?php wp_footer(); ?>

</body>
</html>