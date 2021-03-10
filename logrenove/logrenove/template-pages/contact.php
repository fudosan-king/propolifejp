<?php 
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

<style type="text/css">
    .validate-error {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important;
        border-color: #ff0000!important;
    }
</style>

<main class="sub_underpage">

    <section class="section_contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box_contact">
                        <?php 
                            if(have_posts()):
                                while(have_posts()): the_post();
                                    ?>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                        <p>ログリノベに関するご意見・お問い合わせは下記フォームからご送信ください</p>
                                        <!-- https://go.pardot.com/l/185822/2020-03-11/pn35z9 -->
                                        <!-- <form action="https://go.pardot.com/l/185822/2020-03-11/pn35z9" method="POST" role="form" class="frm_contact" id="pardotFormHandler_Contact"> -->
                                            <form action="https://form.run/api/v1/r/yyr5g3ztsfw5lcy9w9me1u05" method="POST" role="form" class="frm_contact" id="pardotFormHandler_Contact">
                                            <div class="form-group">
                                                <label for="">メールアドレス（必須）</label>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="email" name="email" class="form-control required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">ご意見・お問い合わせ内容</label>
                                                <textarea name="free_detail_contact" id="" cols="30" rows="7" class="form-control"></textarea>
                                            </div>
                                            <p class="text-center mb-0">「プライバシーポリシー」をご一読ください。</p>
                                            <p class="text-center"><a href="https://www.propolife.co.jp/privacypolicy/" class="btn_privacypolicy" target="_blank" rel="noopener noreferrer" >プライバシーポリシーを開く(株式会社プロポライフグループ)</a></p>
                                            <p class="text-center"><button type="submit" class="btn btnAccept">上記に同意して送信</button></p> 
                                        </form>
                                    <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    jQuery(function($) {
        $('#pardotFormHandler_Contact').on('submit', function(event) {
            // event.preventDefault();
            /* Act on the event */
            $.each($('input, textarea'), function(index, el) {
                $(el).val(sanitizeHtml($(this).val()));
            })
        });
    });
</script>

<?php get_footer(); ?>