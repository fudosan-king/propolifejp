	<footer>
	    <div class="footer_top">
	        <div class="container">
	            <div class="row">
	                <div class="col-12 col-lg-12">
	                    <ul>
	                        <li><a href="https://www.propolife.co.jp/terms/" target="_tbank" rel="noopener noreferrer">利用規約</a></li>
	                        <li><a href="https://www.propolife.co.jp/antisocial/" target="_tbank" rel="noopener noreferrer">反社会的勢力排除に関する基本方針</a></li>
	                        <li><a href="https://www.propolife.co.jp/privacypolicy/" target="_tbank" rel="noopener noreferrer">プライバシーポリシー</a></li>
	                        <li><a href="https://www.propolife.co.jp/socialpolicy/" target="_tbank" rel="noopener noreferrer">ソーシャルメディアポリシー</a></li>
	                    </ul>
	                    <div class="row">
	                        <div class="col-12 col-lg-6 align-self-center">
	                            <p class="mb-2"><a href="https://www.chronicle-web.com/" target="_tbank" rel="noopener noreferrer"><img src="<?=SELL_IMAGE_PATH?>/img_logo_chronicle_ja.png" alt="" class="img-fluid" width="178"></a></p>
	                            <p class="mb-0">〒107-0061　東京都港区北⻘⼭3-6-23</p>
	                        </div>
	                        <div class="col-12 col-lg-6 align-self-center">
	                            <a href="https://www.propolife.co.jp/contact/" target="_tbank" rel="noopener noreferrer" class="btn btn_contact">問合せフォーム</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    
	    <div class="footer_bottom">
	    	<div class="container">
	    		<div class="row">
	                <div class="col-12 col-lg-12">
	                    <p class="copyright">Copyright © <a href="https://www.chronicle-web.com/" target="_tbank" rel="noopener noreferrer">CHRONICLE INC.</a> All Rights Reserved.</p>
	                    <p><a href="https://form.kintoneapp.com/public/form/show/d558bcaeda85b5296c9d36ffecc10bdf0030da7172fe657c3be697f61b05f9ef" target="_tbank" rel="noopener noreferrer" class="btn btn_accessnow">今すぐ査定</a></p>
	                    <p class="mb-0">※東京23区のマンション・戸建てのみの取り扱いとなります。</p>
	                </div>
	    		</div>
	    	</div>
	    </div>
	</footer>
	<script src="<?=SELL_SCRIPT_PATH?>/bootstrap.bundle.min.js"></script>
	<script src="<?=SELL_SCRIPT_PATH?>/flickity.pkgd.min.js"></script>
	<script src="<?=SELL_SCRIPT_PATH?>/bsnav.min.js"></script>
	<?php 
		wp_enqueue_script( 'main-script', SELL_SCRIPT_PATH.'/functions.js');
		wp_footer();
	   	do_action( 'footer_extra_script'); 
    ?>
</body>

</html>