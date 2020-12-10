<?php 
/*
    Template Name: mailmagazine
*/
?>

<?php get_header(); ?>

<style type="text/css">
    .validate-error {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important;
        border-color: #ff0000!important;
    }
</style>

<main class="bg-white">

    <?php get_template_part( 'template-parts/breadcrumb', 'default' ); ?>
    <section class="section_mailmagazine">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-4">メルマガ会員登録</h2>
                    <p class="text-center mb-4 mb-lg-5">住まいに関するおすすめのコンテンツを<span class="d-block d-lg-inline-block">いちはやくお届け！</span>最新の情報を見逃しません。</p>
                    <div class="registration_option">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="box_registration_option">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <div class="registration_option_img">
                                                <img src="<?=IMAGE_PATH;?>/mailmagazine/photo.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="registration_option_content">
                                                <h3><a href="#">住まいのお役立ち情報</a></h3>
                                                <p>LogRenoveの最新記事、知っておきたいリノベーションや住宅ローン情報など</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="box_registration_option">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <div class="registration_option_img">
                                                <img src="<?=IMAGE_PATH;?>/mailmagazine/photo02.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="registration_option_content">
                                                <h3><a href="#">イベント・セミナー情報</a></h3>
                                                <p>LogRenove主催のイベント情報やセミナー情報、ショールームVR体験のご案内など</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="box_registration_option">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <div class="registration_option_img">
                                                <img src="<?=IMAGE_PATH;?>/mailmagazine/photo03.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="registration_option_content">
                                                <h3><a href="#">リノベーション・リフォーム</a></h3>
                                                <p>リノベーション施工事例、リフォーム・リノベーションのお役立ち情報、限定動画など</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="https://go.pardot.com/l/185822/2020-10-01/qk54cj" class="frm_registration">
                        <h2><span class="head_title">登録10秒！<span class="d-block d-lg-inline-block">興味のあるカテゴリを選んで</span>メールアドレスを入力するだけ！</span></h2>
                        <div class="frm-input">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-9 col-lg-12">
                                        <label for="">メールアドレス（半角英数字）</label>
                                    </div>
                                    <div class="col-3 col-lg-1 align-self-center text-right text-lg-left">
                                        <span class="label_sub mb-3 mb-lg-0">必須</span>
                                    </div>
                                    <div class="col-12 col-lg-11 align-self-center">
                                        <input type="text" name="email" placeholder="例：xxxxxxx@logrenove.jp" class="form-control required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="mb-3 mb-lg-0">興味のあるサービス</label>
                                <div class="row">
                                    <div class="col-12 col-lg-1">
                                    </div>
                                    <div class="col-10 col-lg-11">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="service[]" class="custom-control-input" id="customCheck1" value="住まいのお役立ち情報">
                                            <label class="custom-control-label font-weight-normal" for="customCheck1">住まいのお役立ち情報</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="service[]" class="custom-control-input" id="customCheck2" value="リフォーム・リノベーション">
                                            <label class="custom-control-label font-weight-normal" for="customCheck2">リフォーム・リノベーション</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="service[]" class="custom-control-input" id="customCheck3" value="イベント・セミナー情報">
                                            <label class="custom-control-label font-weight-normal" for="customCheck3">イベント・セミナー情報</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box_content_footer">
                                <p class="primary_policy"><span class="d-lg-block">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。</span>
                                <span class="d-lg-block">個人情報の取扱に関しましては <a class="btn-link" href="https://www.propolife.co.jp/privacypolicy/" target="_blank" rel="noopener noreferrer"><b>プライバシーポリシー</b></a> をご覧ください。</span>
                                <span class="d-block d-lg-inline-block">ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</span></p>

                                <div class="form-group text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="ck_agree" class="custom-control-input required" id="ck_agree" checked="">
                                        <label class="custom-control-label font-weight-normal ck_agree" for="ck_agree">同意する</label>
                                    </div>

                                    <button type="submit" class="btn btnAgree" id="btnAgree">上記に同意して登録する <i class="i_rightwhite"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- confirm -->
                        <div class="frm_general_content frm_confirm" style="display: none">
                           <table class="table table-bordered">
                              <tr>
                                 <td>
                                    <label>メールアドレス</label>
                                 </td>
                                 <td id="email" class="confirm-text"></td>
                              </tr>
                              <tr>
                                 <td>
                                    <label>興味のあるサービス</label>
                                 </td>
                                 <td id="service" class="confirm-text"></td>
                              </tr>
                           </table>
                           <div class="box_content_footer mt-4">
                               <div class="form-group text-center">
                                   <div class="row">
                                       <div class="col-12 col-lg-6">
                                           <button type="submit" class="btn btnAgree" id="btnBack"><i class="i_rightwhite rotate"></i> 戻る</button>
                                       </div>
                                       <div class="col-12 col-lg-6">
                                           <button type="submit" class="btn btnAgree" id="btnSubmit">送信する <i class="i_rightwhite"></i></button>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>