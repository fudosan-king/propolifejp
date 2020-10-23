
                    </section>
                </div>
            </main>

            <footer>
                <div class="footer_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="footer_top_content">
                                    <div class="footer_top_item">
                                        <h4>企業情報</h4>
                                        <ul>
                                            <li><a target="_blank" href="#">会社概要</a></li>
                                            <li><a target="_blank" href="">企業沿革</a></li>
                                            <li><a target="_blank" href="">アクセス</a></li>
                                            <li><a target="_blank" href="">NEWS</a></li>
                                            <li><a target="_blank" href="">採用情報</a></li>
                                            <li><a target="_blank" href="">会社案内</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer_top_item">
                                        <h4>各種お問い合わせ</h4>
                                        <ul>
                                            <li><a href="<?=base_url();?>contact/chintai">当社管理賃貸物件に関するお問い合わせ</a></li>
                                            <li><a href="<?=base_url();?>contact/kaiyaku">解約に関するお問い合わせ</a></li>
                                            <li><a href="<?=base_url();?>contact/bunjyo">当社管理マンションに関するお問い合わせ</a></li>
                                            <li><a href="<?=base_url();?>contact/important">管理に関わる重要事項調査報告書作成の依頼</a></li>
                                            <li><a href="<?=base_url();?>contact/naiken">仲介業者様専用内見依頼フォーム</a></li>
                                            <li><a href="<?=base_url();?>contact/others">その他のお問い合わせ</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer_top_item">
                                        <h4>グループ企業</h4>
                                        <ul>
                                            <li><a target="_blank" href="https://www.propolife.co.jp">株式会社プロポライフグループ</a></li>
                                            <li><a target="_blank" href="https://www.chronicle-web.com/">株式会社クロニクル</a></li>
                                            <li><a target="_blank" href="http://www.chronicle-kensetsu.co.jp">株式会社クロニクル建設</a></li>
                                            <li><a target="_blank" href="https://www.prostyle-residence.com">株式会社プロスタイル</a></li>
                                            <li><a href="javascript:void(0)" class="none-link">煙台提案生活木業有限公司</a></li>
                                            <li><a target="_blank" href="https://www.propolifevietnam.com/">PROPOLIFE VIETNAM</a></li>
                                            <li><a target="_blank" href="http://nikuan-kotakino.com/">株式会社小滝野</a></li>
                                            <li><a target="_blank" href="https://www.prostyleryokan.com">株式会社プロスタイル旅館</a></li>
                                            <li><a target="_blank" href="https://www.oki-ig.com">株式会社沖縄イゲトー</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer_top_item">
                                        <h4>お問い合わせ</h4>
                                        <ul>
                                            <li><a href="tel:0120997950">0120-99-7950</a><span>（無料）</span></li>
                                            <li><a href="tel:0455819556">045-581-9556</a><span>（代）</span></li>
                                            <li><a href="tel:0455756477">045-575-6477</a><span>（FAX）</span></li>
                                            <li>
                                                <p class="mb-0">営業時間：10:00～19:00<br>
                                                定休日：水曜日<br>
                                                ※祝日を除く</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer_bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <ul>
                                    <li><a href="<?=base_url();?>contact/" target="_blank">お問い合わせ</a></li>
                                    <li><a href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a></li>
                                    <li><a href="<?=base_url();?>privacy-policy" target="_blank">プライバシーポリシー</a></li>
                                </ul>
                                <p class="copyright">Copyright © <a href="index.php">CHINO-TATEMONO.INC.</a> All rights reserved.　</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"></a>
            </footer>

        </div>
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/js/script.js"></script>
        <script src="<?=base_url();?>assets/js/sanitize.min.js"></script>
        <script src="<?=base_url();?>assets/js/wanakana.min.js"></script>
        <?php 
            if($this->uri->uri_string() == 'contact'):
                ?>
                <script src="<?=base_url();?>assets/js/contact.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
                <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                <?php
            endif; 
            if($this->uri->uri_string() == 'contact/bunjyo'):
                ?>
                <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"></script>
                <script src="<?=base_url();?>assets/js/pardot/bunjyo.js"></script>       
                <?php
            endif;
            if($this->uri->uri_string() == 'contact/kaiyaku'):
                ?>
                 <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"></script>
                <script src="<?=base_url();?>assets/js/pardot/kaiyaku.js"></script>  
                <script src="<?=base_url();?>assets/js/pardot/customdate.js"></script>
                <?php
            endif;
            if($this->uri->uri_string()=='contact/naiken' || $this->uri->uri_string()=='contact/chintai' || $this->uri->uri_string()=='contact/others'): ?>
                <script src="<?=base_url();?>assets/js/naiken.js"></script>
                <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
                <script src="<?=base_url();?>assets/js/functions.js"></script>
            <?php endif;
            if($this->uri->uri_string() == 'contact/important'):
                ?>
                <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                <script src="<?=base_url();?>assets/js/pardot/important.js"></script>       
                <?php
            endif;
            if($this->uri->uri_string() == 'kaiyaku'):
                ?>
                <script src="<?=base_url();?>assets/js/kaiyaku.js"></script>
                <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ja.min.js"></script>
                <?php
            endif;
        ?>

    </body>
</html>