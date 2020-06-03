<?php 
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

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
                                        <form action="http://go.pardot.com/l/185822/2020-03-11/pn35z9" method="POST" role="form" class="frm_contact">
                                            <div class="form-group">
                                                <label for="">メールアドレス（必須）</label>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="email" name="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">ご意見・お問い合わせ内容</label>
                                                <textarea name="free_detail_contact" id="" cols="30" rows="7" class="form-control"></textarea>
                                            </div>
                                            <p class="text-center mb-0">「プライバシーポリシー」をご一読ください。</p>
                                            <p class="text-center"><a href="#" class="btn_privacypolicy">プライバシーポリシーを開く(株式会社プロポライフグループ)</a></p>
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

<?php get_footer(); ?>