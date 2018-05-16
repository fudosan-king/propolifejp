<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
  <!-- <div class="se-pre-con"></div> -->
    <div id="page">

      <?php require 'header_underpage.php'; ?>

      <section class="section_sub_banner">      
        <div class="container">
          <div class="row">
            <div class="col col-12 col-sm-12">
              <h2>お問合わせ</h2>
              <p>Contact</p>
            </div>
          </div>
        </div>
      </section>

      <main>
        <section class="section_products">
          <div class="container">
            <div class="row">
              <div class="col col-12 col-sm-8 offset-0 offset-sm-2">
                  <form action="http://go.pardot.com/l/185822/2018-05-16/86z26r" method="post" class="frm_contact">
                    <div class="form-row">
                      <div class="form-group col-sm-4 col-12">
                        <label class="mt-sm-4 mt-0" for="">お名前</label>
                      </div>
                      <div class="form-group col-sm-4 col-6">
                        <p>姓</p>
                        <input type="text" class="form-control" id="first-name" name="first-name">
                      </div>
                      <div class="form-group col-sm-4 col-6">
                        <p>名</p>
                        <input type="text" class="form-control" id="last-name" name="last-name">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-sm-4">
                        <label for="">メールアドレス</label>
                      </div>
                      <div class="form-group col-sm-8">
                        <input type="text" class="form-control" id="email" name="email">
                      </div>
                    </div>
                  <div class="form-row">
                    <div class="form-group col-sm-4">
                      <label for="">ご連絡先電話番号</label>
                    </div>
                    <div class="form-group col-sm-8">
                      <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-4">
                      <label for="">法人名</label>
                    </div>
                    <div class="form-group col-sm-8">
                      <input type="text" class="form-control" id="company" name="company">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-sm-4 col-12">
                      <label class="mt-sm-5 mt-0" for="">住所</label>
                    </div>
                     <div class="form-group col-sm-8 col-12">
                      <div class="form-row border-bottom-0 mb-0">
                        <div class="form-group col-sm-12 col-6">
                          <p>都道府県</p>
                          <input type="text" class="form-control" placeholder="沖縄県" id="pref" name="pref">
                        </div>
                        <div class="col-sm-12 col-6">
                          <p>住所</p>
                          <input type="text" class="form-control" placeholder="南城市佐敷字津波古978番地" id="address" name="address">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-sm-4">
                      <label class="mt-0 mt-sm-5" for="">お問合わせ内容</label>
                    </div>
                    <div class="form-group col-sm-8">
                      <textarea name="" class="form-control" rows="5" id="details" name="details"></textarea>
                    </div>
                  </div>

                  <div class="form-row border-bottom-0">
                    <div class="form-group col-sm-4">
                    </div>
                    <div class="form-group col-sm-8">
                      <button type="submit" class="btn btnSend">SEND</button>
                    </div>
                  </div>
                  
                </form>
              </div>

              
             
            </div>
          </div>
        </section>
      </main>        
        
        <?php require 'footer.php'; ?>
    </div>
    <?php require 'js-footer.php'; ?>
</body>
</html>
