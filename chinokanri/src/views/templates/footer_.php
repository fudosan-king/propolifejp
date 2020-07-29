        </div>
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>contact" target="_blank">お問い合わせ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>kaiyaku" target="_blank">解約フォーム</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.propolife.co.jp/recruit/" target="_blank">採用情報</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=base_url();?>privacy-policy" target="_blank">プライバシーポリシー</a>
                            </li>
                        </ul>
                        <p>Copyright © CHINO-TATEMONO.INC. All rights reserved.</p>
                    </div>
                    
                </div>
            </div>
            <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"></a>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?=base_url();?>assets/js/script.js"></script>
        <?php 
            if($this->uri->uri_string() == 'contact'):
                ?>
                <script src="<?=base_url();?>assets/js/contact.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
                <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
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