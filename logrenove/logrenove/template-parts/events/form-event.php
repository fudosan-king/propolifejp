<?php $even_datetime = get_event_datetime(); ?>

<style type="text/css">
    .validate-error {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(239, 104, 104, 0.6)!important;
        border-color: #ff0000!important;
    }
</style>

<form id="frm_services" class="frm_services" action="https://go.pardot.com/l/185822/2020-09-01/qh62y3" method="post" accept-charset="utf-8">
    <div class="frm-input">
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-12 col-lg-2 align-self-center">
                    <label for="">開始日時</label>
                </div>
                <div class="col-12 col-lg-10 align-self-center">
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <div class="box_datetime mb-2 mb-lg-0">
                                <!-- <input type="text" name="" class="form-control datepicker" placeholder="日付を選択"> -->
                                <input type="text" name="date" class="form-control required" placeholder="日付を選択" value="<?php echo $even_datetime['date'];?>" readonly>
                                <!-- <i class="i_datetime"></i> -->
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <!-- <select name="" id="" class="form-control custom-select">
                                <option value="">時間を選択</option>
                                <option value="">...</option>
                                <option value="">...</option>
                            </select> -->
                            <input type="text" name="time" class="form-control required" value="<?php echo $even_datetime['time'];?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-lg-2 align-self-center">
                    <label for="">氏名<span class="red">（※）</span></label>
                </div>
                <div class="col-12 col-lg-10 align-self-center">
                    <input type="text" name="name" class="form-control required" placeholder="例：山田 太郎">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-lg-2 align-self-center">
                    <label for="">メール<span class="red">（※）</span></label>
                </div>
                <div class="col-12 col-lg-10 align-self-center">
                    <input type="text" name="email" class="form-control required" placeholder="例：xxxxxxx@logrenove.jp">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-lg-2">
                    <label for="">気になるご質問</label>
                </div>
                <div class="col-12 col-lg-10">
                    <textarea name="inquiry_content" class="form-control" placeholder="ご質問やご希望があればご記入ください。"></textarea>
                </div>
            </div>
        </div>
        <div class="box_content_footer">
            <p class="primary_policy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。
            個人情報の取扱に関しましては <a target="_blank" class="btn-link" href="https://www.propolife.co.jp/privacypolicy/"><b>プライバシーポリシー</b></a> をご覧ください。<br>
            ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>

            <div class="form-group text-center mb-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input required" name="ck_agree" id="ck_agree" checked>
                    <label class="custom-control-label font-weight-normal ck_agree" for="ck_agree">同意する</label>
                </div>

                <button type="submit" class="btn btnAgree" id="btnAgree">上記に同意して確認画面へ <i class="i_rightwhite"></i></button>
            </div>
        </div>
    </div>
    <!-- confirm -->
    <div class="frm_general_content frm_confirm" style="display: none">
       <table class="table table-bordered">
          <tr>
             <td>
                <label>開始日時</label>
             </td>
             <td class="confirm-text">
                 <span id="date"></span> <span id="time"></span>
             </td>
          </tr>
          <tr>
             <td>
                <label>氏名</label>
             </td>
             <td id="name" class="confirm-text"></td>
          </tr>
          <tr>
             <td>
                <label>メール</label>
             </td>
             <td id="email" class="confirm-text"></td>
          </tr>
          <tr>
             <td>
                <label>気になるご質問</label>
             </td>
             <td id="inquiry_content" class="confirm-text"></td>
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
