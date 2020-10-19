<section class="form-consult">
    <p class="box_intro">リノベーションに関するお悩み・疑問にお答えするオンライン相談を開始しました。</p>
    <form action="https://go.pardot.com/l/185822/2020-05-18/q4hv1q" method="POST" class="frm_online" autocomplete="off">
        <section class="data-input">
            <div class="form-group">
                <input type="text" class="form-control" name="name" required>
                <div class="placeholder-custom">お名前<span class="require">（必須）</span></div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" required placeholder="">
                <div class="placeholder-custom">メールアドレス<span class="require">（必須）</span></div>
            </div>
            <div class="form-group mb-5">
                <label>希望日時<span class="require">（必須）</span></label>
                <div class="row">
                    <div class="col-6">
                        <input id="datepicker" type="text" name="datepicker" class="form-control datepicker" readonly>
                        <div class="placeholder-custom">日付を選択</div>
                    </div>
                    <div class="col-6">
                         <select name="time" class="form-control" placeholder="">
                            <option value="時間を選択" selected>時間を選択</option>
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

            <div class="form-group mb-4">
                <label>読むだけでわかるリノベーションマガジン</label>
                <div class="row">
                    <div class="checkbox col-4">
                        <label>
                            <input type="checkbox" name="madori[]" value="受け取る" checked>
                            受け取る
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>ご質問・ご要望</label>
                <textarea name="note" id="input" class="form-control" rows="4"></textarea>
            </div>
            <p class="text-center text_information"><small>ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                    個人情報の取扱に関しましては<a target="_blank" href="https://www.chronicle-web.com/policy/" rel="noopener noreferrer">プライバシーポリシー</a>をご覧ください。</small>
            </p>
            <p class="mb-0 text-center">
                <button type="button" id="btn_confirm" name="confirm" class="btn btn_border">上記に同意して確認画面へ</button>
            </p>
        </section>

        <section class="data-confirm" style="display: none;">
            <div class="box_entry">
                <h2 class="text-center">入力内容をご確認ください</h2>
                <div class="row">
                    <div class="col-4 col-md-6 align-self-center">
                        <label for="">お名前</label>
                    </div>
                    <div class="col-8 col-md-6 align-self-center">
                        <label class="cfr cfr_name"></label>
                        <input type="hidden" name="pd_name" value="">
                    </div>
                    <div class="col-4 col-md-6 align-self-center">
                        <label for="">メールアドレス</label>
                    </div>
                    <div class="col-8 col-md-6 align-self-center">
                        <label class="cfr cfr_email"><span id="cfr_email"></span></label>
                        <input type="hidden" name="pd_email" value="">
                    </div>
                    <div class="col-4 col-md-6 align-self-center">
                        <label for="">希望日時</label>
                    </div>
                    <div class="col-8 col-md-6 align-self-center">
                        <label class="cfr cfr_date_time"></label>
                        <input type="hidden" name="pd_appointment_date" value="">
                        <input type="hidden" name="pd_appointment_time" value="">
                    </div>
                    <div class="col-4 col-md-6 align-self-center">
                        <label for="">読むだけでわかるリノベーションマガジン</label>
                    </div>
                    <div class="col-8 col-md-6 align-self-center">
                        <label class="cfr cfr_madori"></label>
                        <input type="hidden" name="pd_madori" value="">
                    </div>
                    <div class="col-4 col-md-6 align-self-center">
                        <label for="">ご質問・ご要望</label>
                    </div>
                    <div class="col-8 col-md-6 align-self-center">
                        <label class="cfr cfr_note"></label>
                        <input type="hidden" name="pd_note" value="">
                    </div>
                </div>
                <p class="text-center text_information"><small>ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                個人情報の取扱に関しましては<a target="_blank" href="https://www.chronicle-web.com/policy/" rel="noopener noreferrer">プライバシーポリシー</a>をご覧ください。</small></p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <a href="" class="btn btn_border btn_return w-100">入力画面に戻る</a>
                </div>
                <div class="col-12 col-md-6">
                    <button type="submit" name="submit" class="btn btn_border btn_send w-100">送信する</button>
                </div>
            </div>
        </section>
    </form>
</section>