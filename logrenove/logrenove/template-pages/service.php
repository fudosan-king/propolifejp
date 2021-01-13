<?php 
/*
    Template Name: Service
*/
?>

<?php get_header(); ?>

<main>
    <section class="section_info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_info_content">
                        <h2 class="mb-0">LogRenoveというブランド名には<br>
                        「Log＝無垢」と「Renove＝リノベーション」<br>
                        という想いが込められています。<br>
                        自分にも環境にも優しい、<br>
                        天然無垢材を使ったリノベーション。<br>
                        そんな心地いい暮らしを、<br>
                        あなたも始めてみませんか？</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_thecharm">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-lg-4">
                    <div class="box_thecharm_left clearfix">
                        <div class="box_thecharm_img">
                            <img src="<?=SERVICE_IMAGE_PATH;?>/1x/thecharm.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="box_thecharm_content">
                        <h2>LogRenoveリノベーションの<span class="blue">魅力</span></h2>
                        <p>LogRenoveは高品質無垢材をふんだんに使ったリノベーション・ブランドです。<br>
                        無垢材とは、天然木から切り出したありのままの木材のこと。<br>
                        薄い木材を貼り合わせた合板と比べると値は張りますが、<br>
                        年を経るごとに風合いが増し、触れるたびに木材本来の心地よさが味わえます。<br>
                        耐久性の高さ、化学物質を使わないことによる安全性の高さも魅力です。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_strengths">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>LogRenoveが提供する<span>2つの強み</span></h2>
                    <div class="row no-gutters">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="box_strengths mr-0 mr-md-2">
                                <div class="strengths_img">
                                    <img src="<?=SERVICE_IMAGE_PATH;?>/1x/1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="box_strengths_content">
                                    <span class="number">1</span>
                                    <h3>ワンストップリノベーション</h3>
                                    <p>LogRenoveの無垢材リノベーションは、製材から販売、施工、アフターサービスまですべて自社で行います。自社内での「ワンストップリノベーション」だからこそ、中間マージンを省いた、品質と価格のバランスに優れたリノベーションをご提供できるのです。レベルの高いA、Bランクの無垢材を使っているにも関わらず、他社の無垢材リノベーションよりもコスト圧縮できるケースがほとんどです。</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="box_strengths ml-0 ml-md-2">
                                <div class="strengths_img">
                                    <img src="<?=SERVICE_IMAGE_PATH;?>/1x/2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="box_strengths_content">
                                    <span class="number">2</span>
                                    <h3>豊富な無垢材施工実績</h3>
                                    <p>過去10年、1500件もの無垢材施工を行ってきた信頼感もポイントです。無垢材は、湿度により伸縮する性質があるため、施工やメンテナンスにはちょっとしたコツが必要になりますが、LogRenoveならばその点も安心。また施工実績が豊富だからこそ「見積もり」を精度高く出せるというメリットも。最初から予算感をつかみやすいので、ストレスなく無垢材リノベーションを楽しんでいただけます。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>リノベーションのご相談はこちらから</h4>
                    <p class="text-center"><a href="#" class="btn btn_contactus">お問い合わせ</a></p>
                </div>
            </div>
        </div>
    </section>

     <section class="section_cases">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="box_cases_info">
                        <h2><span>無垢材</span>リノベーション事例</h2>
                        <p>LogRenoveならではの<br>
                        無垢材を使ったリノベーション事例を<br>
                        ご覧いただけます。</p>
                        <div class="btn_group">
                            <button class="btn button--next-wrapped"></button>
                            <p class="carousel-status d-inline-block mb-0"></p>
                            <button class="btn button--next"></button>
                        </div>
                        <?php $obj = get_category_by_slug( 'work' );?>
                        <a href="<?php echo get_category_link( $obj ); ?>" class="btn btn_morecase" target="_blank" rel="noopener noreferrer">事例をもっと見る <i class="i_right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="carousel_cases">
                        <div class="carousel" data-flickity='{"wrapAround": true, "groupCells": 1, "pageDots": false, "prevNextButtons": false }'>
                            <div class="carousel-cell">
                                <div class="cases_item">
                                    <div class="cases_item_img">
                                        <img src="<?=SERVICE_IMAGE_PATH;?>/1x/6.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="cases_item_body">
                                        <a href="https://www.logrenove.jp/work/471/" class="btn btnDetail" target="_blank" rel="noopener noreferrer">詳しく見る <i></i></a>
                                        <h3>オーナーの「猫愛」が止まらない…猫が縦横無尽に遊ぶ家</h3>
                                        <p>物件名：<span>立松邸</span></p>
                                        <p>専有面積：<span>54.08㎡</span></p>
                                        <p>築年月：<span>1974年10月</span></p>
                                        <p>間取り：<span>1LDK＋パントリー</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="cases_item">
                                    <div class="cases_item_img">
                                        <img src="<?=SERVICE_IMAGE_PATH;?>/1x/5.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="cases_item_body">
                                        <a href="https://www.logrenove.jp/work/569/" class="btn btnDetail" target="_blank" rel="noopener noreferrer">詳しく見る <i></i></a>
                                        <h3>リビング内書斎、回遊できるキッチンが「夫婦円満」の秘訣!?</h3>
                                        <p>物件名：<span>髙山邸</span></p>
                                        <p>専有面積：<span>83.09㎡</span></p>
                                        <p>築年月：<span>1987年2月</span></p>
                                        <p>間取り：<span>2LDK＋S</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-cell">
                                <div class="cases_item">
                                    <div class="cases_item_img">
                                        <img src="<?=SERVICE_IMAGE_PATH;?>/1x/3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="cases_item_body">
                                        <a href="https://www.logrenove.jp/work/808/" class="btn btnDetail" target="_blank" rel="noopener noreferrer">詳しく見る <i></i></a>
                                        <h3>暮らし方、時間の流れさえも変えた「無垢材リノベ」との出会い</h3>
                                        <p>物件名：<span>I邸</span></p>
                                        <p>専有面積：<span>49.6㎡</span></p>
                                        <p>築年月：<span>1973年12月</span></p>
                                        <p>間取り：<span>1LDK＋ワークスペース</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_simulator" id="simulator">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>LogRenoveリノベーション<span class="d-block">金額シミュレーター</span></h2>
                    <p class="subtitle">理想の物件情報を下記に入力すれば、<br>
                    LogRenoveリノベーションの金額が即座にわかります。<br>
                    さらに口ーンの支払い金額もシミュレート！</p>
                    <div class="box_room_detail_content">
                        <form action="" class="frm_room_detail">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">物件の広さ <small>※専有面積</small></label>
                                        <div class="d-flex">
                                            <select class="form-control property_size" id="iRoomArea" name="nRoomArea" dir="rtl"></select>
                                            <span class="unit align-self-end">㎡</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">物件の価格 <small></small></label>
                                        <div class="d-flex">
                                            <input type="number" id="iRoomPrice" class="form-control property_price" placeholder="例:1500" min="0">
                                            <span class="unit align-self-end">万円</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">樹種を選択</label>
                                <ul id="iMaterial-wrapper" class="list_select_material"></ul>
                            </div>

                            <div class="form-group text-center">
                                <?php if(is_user_logged_in()) { ?>
                                    <a href="" id="iEstimate" class="btn btnStart">START</a>
                                <?php } else { ?>
                                    <a href="" class="btn btnStart" data-toggle="modal" data-target="#choose_tree">START</a>
                                <?php } ?>
                            </div>
                            <p class="renovation_fee"><a href="#">物件</a>+<a href="#">リノベーション</a>費用</p>

                            <div class="form-group mb-0">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <label for="">ローンの目安</label>
                                        <div class="box_input_custom">
                                            <input type="text" id="iMonthlyLoan" class="form-control estimated_loan" placeholder="101,137">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="box_theamount">
                                            <label for="">総額</label>
                                            <div class="box_input_theamount">
                                                <input type="text" id="iTotalPrice" class="form-control theamount" placeholder="2150">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="rate_percent">
                                    ※借入年数35年、ボーナス返済なし、元利均等返済、変動金利年0.47％、頭金0円を想定<br>
                                    ※このシミュレーションは目安です。実際の購入・借入については、オンライン相談にてお尋ねください。
                                </p>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="section_bookonlineconsultation">
        <div class="top_bookonlineconsultation">
            <div class="top_bookonlineconsultation_img">
                <img src="<?=SERVICE_IMAGE_PATH;?>/1x/bg_onlineconsultation.jpg" alt="" class="img-fluid w-100">
            </div>
            <!-- <a href="#" class="btn btntalkhome">ご自宅で「住まいのご相談」しませんか？</a> -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box_bookonline" id="online">
                        <h2>オンライン相談のご予約</h2>
                        <p class="subtitle">
                            ご自宅で「住まいのご相談」しませんか？
                        </p>
                        <form action="https://go.pardot.com/l/185822/2020-07-10/q99yq2" method="POST" name="pardotForm" id="pardotForm" class="frm_box_bookonline">
                            <section class="data-input">
                                <div class="form-group">
                                    <label for="">お名前</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" name="name" data-require="true" class="form-control" placeholder="例：山田太郎">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">メールアドレス（半角英数字）</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1 align-self-center">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11 align-self-center">
                                            <input type="text" name="email" data-require="true" placeholder="例：xxxxxxx@logrenove.jp" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">相談希望日時</label>
                                    <p>第1希望日時</p>
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-1 align-self-center">
                                            <span class="label_sub mb-2 mb-lg-0">必須</span>
                                        </div>
                                        <div class="col-12 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_datetime mb-2 mb-lg-0">
                                                        <input type="text" name="datepicker1" data-require="true" class="form-control datepicker" placeholder="日付を選択">
                                                        <i class="i_datetime"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <select name="time1" id="" data-require="true" class="form-control custom-select">
                                                        <option value="" selected>時間を選択</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="19:00">19:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-1 mb-lg-3">第2希望日時</p>
                                    <div class="row mb-3">
                                        <div class="col-12 col-lg-1 align-self-center">
                                        </div>
                                        <div class="col-12 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_datetime mb-2 mb-lg-0">
                                                        <input type="text" name="datepicker2" class="form-control datepicker" placeholder="日付を選択">
                                                        <i class="i_datetime"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <select name="time2" id="" class="form-control custom-select">
                                                        <option value="" selected>時間を選択</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="19:00">19:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="mb-1 mb-lg-3">第3希望日時</p>
                                    <div class="row">
                                        <div class="col-12 col-lg-1 align-self-center">
                                        </div>
                                        <div class="col-12 col-lg-11 align-self-center">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_datetime mb-2 mb-lg-0">
                                                        <input type="text" name="datepicker3" class="form-control datepicker" placeholder="日付を選択">
                                                        <i class="i_datetime"></i>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <select name="time3" id="" class="form-control custom-select">
                                                        <option value="" selected>時間を選択</option>
                                                        <option value="10:00">10:00</option>
                                                        <option value="11:00">11:00</option>
                                                        <option value="12:00">12:00</option>
                                                        <option value="13:00">13:00</option>
                                                        <option value="14:00">14:00</option>
                                                        <option value="15:00">15:00</option>
                                                        <option value="16:00">16:00</option>
                                                        <option value="17:00">17:00</option>
                                                        <option value="18:00">18:00</option>
                                                        <option value="19:00">19:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">オンラインツールのご希望</label>
                                    <div class="row">
                                        <div class="col-2 col-lg-1">
                                            <span class="label_sub">必須</span>
                                        </div>
                                        <div class="col-10 col-lg-11">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="ordinarydeposit" name="request_online[]" class="custom-control-input" value="Zoom" checked>
                                                <label class="custom-control-label" for="ordinarydeposit">Zoom</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="current_account" name="request_online[]" class="custom-control-input" value="Google meet">
                                                <label class="custom-control-label" for="current_account">Google meet</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="fs_default" for="">お問い合わせ内容</label>
                                    <textarea name="inquiry_content" id="" class="form-control" cols="30" rows="8" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                                </div>

                                <div class="box_content_footer">
                                    <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。個人情報の取扱に関しましては <a class="btn-link" href="https://www.propolife.co.jp/privacypolicy/" target="_blank" rel="noopener noreferrer"><b>プライバシーポリシー</b></a> をご覧ください。<br>
                                    ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>

                                    <div class="form-group text-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" data-require="true" class="custom-control-input" id="ck_agree" checked>
                                            <label class="custom-control-label" for="ck_agree">同意する</label>
                                        </div>

                                        <button type="button" id="btn_confirm" class="btn btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
                                    </div>
                                </div>
                            </section>
                            <section class="data-confirm" style="display: none;">
                                <div class="form-group">
                                    
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="">お名前</label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <div class="cfr_name">fd</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3 align-self-center">
                                            <label for="">メールアドレス</label>
                                        </div>
                                        <div class="col-12 col-lg-9 align-self-center">
                                            <div class="cfr_email">df</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="mb-3" for="">相談希望日時</label>
                                    <div class="row mb-3">
                                        <div class="col-5 col-lg-3">
                                            <span class="pl-3">第1希望日時</span>
                                        </div>
                                        <div class="col-7 col-lg-9 align-self-center">
                                             <div class="cfr_date_time_1">df</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-5 col-lg-3">
                                            <span class="pl-3">第2希望日時</span>
                                        </div>
                                        <div class="col-7 col-lg-9 align-self-center">
                                             <div class="cfr_date_time_2">df</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-5 col-lg-3">
                                            <span class="pl-3">第3希望日時</span>
                                        </div>
                                        <div class="col-7 col-lg-9 align-self-center">
                                             <div class="cfr_date_time_3">df</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="">オンラインツール</label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                           <div class="cfr_request_online">df</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12 col-lg-3">
                                            <label for="">お問い合わせ内容</label>
                                        </div>
                                        <div class="col-12 col-lg-9">
                                           <div class="cfr_inquiry_content">df</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <br><br>
                                <div class="box_content_footer">
                                    <div class="form-inline justify-content-center">
                                        <button type="button" id="btn_return" class="btn btnAgree cfr">戻る <i class="i_rightwhite rotate"></i></button>
                                        <button type="submit" id="btn_send" class="btn btnAgree cfr">送信する <i class="i_rightwhite"></i></button>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php if(!is_user_logged_in()) { ?>

<!-- Thêm đoạn Popup -->
<section class="choose_modal">
    <div class="modal fade" id="choose_tree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="btn-only-member">
                <div class="btn-only-member_ct">
                    <p><i class="btn-only-member_i-clock"></i>シミュレーション結果は会員限定です。</p>
                    <p>会員登録（無料）すると結果をご覧いただけます。</p>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>新規登録の方はこちら</p>
                            <a class="btn btn-only-member_brown" href="<?php echo site_url('signup?redirect_to='.get_page_link()); ?>" target="_blank">今すぐ登録</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>会員の方はこちら</p>
                            <a class="btn btn-only-member_blue" href="<?php echo site_url('login?redirect_to='.get_page_link()); ?>" target="_blank">ログイン</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- End -->
<?php } ?>

<?php get_footer(); ?>