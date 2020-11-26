<section class="service-lp">
	<nav class="navbar navbar-expand-lg">

    <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <img class="img-fluid" src="<?php echo COUNTER_IMAGE_PATH;?>/logo-logrenove-text.png" alt="logo" title="logo">
      <span></span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" rel="#about-lp" href="#">スマートリノベカウンターとは？</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="#operation-lp" href="#">サービスの流れ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="#proposal-lp" href="#">ご提案事例</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="#faq-lp" href="#">FAQ</a>
        </li>
        <?php if(is_user_logged_in()) { ?>
          <li class="nav-item">
            <a class="nav-link" rel="#form-lp" href="#">ご予約フォーム</a>
          </li>
        <?php } ?>
      </ul>

    </div>
  </nav>
</section>
