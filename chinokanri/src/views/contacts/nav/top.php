<?php $segment = $this->uri->segment(2); ?>
<nav class="nav_top">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <a class="nav-item nav-link flex-fill <?php echo $segment == 'naiken' ? 'active' : ''; ?>" id="nav-previewrequest-tab" href="<?=base_url();?>contact/naiken" role="tab" aria-controls="nav-previewrequest" aria-selected="true"><span>内見依頼に関する<br>お問い合わせ</span></a>
               <a class="nav-item nav-link flex-fill <?php echo $segment == 'chintai' ? 'active' : ''; ?>" id="nav-rentalproperty-tab" href="<?=base_url();?>contact/chintai" role="tab" aria-controls="nav-rentalproperty" aria-selected="false"><span>当社管理賃貸物件に<br>関するお問い合わせ</span></a>
               <a class="nav-item nav-link flex-fill <?php echo $segment == 'bunjyo' ? 'active' : ''; ?>" id="nav-propertysale-tab" href="<?=base_url();?>contact/bunjyo" role="tab" aria-controls="nav-propertysale" aria-selected="false"><span>当社管理分譲物件に<br>関するお問い合わせ</span></a>
               <a class="nav-item nav-link flex-fill <?php echo $segment == 'kaiyaku' ? 'active' : ''; ?>" id="nav-cancellation-tab" href="<?=base_url();?>contact/kaiyaku" role="tab" aria-controls="nav-cancellation" aria-selected="false"><span>解約に関するお問い合わせ</span></a>
               <a class="nav-item nav-link flex-fill <?php echo $segment == 'important' ? 'active' : ''; ?>" id="nav-management-tab" href="<?=base_url();?>contact/important" role="tab" aria-controls="nav-management" aria-selected="false"><span>管理に関わる<br>重要事項調査報告書作成<br>の依頼</span></a>
            </div>
         </div>
      </div>
   </div>
</nav>