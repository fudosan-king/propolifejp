<?php 
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

 <main>
    <div class="box_underpage">
        <section class="section_contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">CONTACT</h2>
                        <p class="sub_title">お問い合わせ</p>
                        <form action="http://go.pardot.com/l/185822/2020-08-31/qh1njf" method="POST" role="form" class="frm_contact">
                            <div class="form-group">
                                <label for="">お名前　[必須]</label>
                                <input type="text" name="your_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">貴社名（※法人様の場合）</label>
                                <input type="text" name="your_company"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">メールアドレス [必須]</label>
                                <input type="email" name="your_email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">お問い合わせ内容　[必須]</label>
                                <input type="text" name="free_detail_contact" class="form-control" required>
                            </div>
                            <p class="text-center">弊社の個人情報に関する取り扱いについては <a href="https://www.propolife.co.jp/privacypolicy/" class="blue font-weight-bold">プライバシーポリシー</a> をご一読ください。<br>
                            上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                            <div class="custom-control custom-checkbox text-center">
                                <input type="checkbox" name="your_agree" class="custom-control-input" id="customCheck1" checked="checked">
                                <label class="custom-control-label font-weight-normal" for="customCheck1">同意する</label>
                            </div>
                            <div class="form-group mt-5 text-center">
                                <button type="submit" id="ibtnGoSubmit" class="btn btnSend">上記に同意して送信</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>