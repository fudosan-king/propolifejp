<section id="form-lp" class="service-lp form-lp">
	<div class="container">
		<div class="form-lp_bg">
		<p class="small-title">スマートリノベカウンター</p>
		<h2>ご相談予約</h2>
		<div class="form-tab">
	        <div class="row">
	            <div class="col-12 col-lg-12">
	                <ul class="nav nav-tabs" id="myTab" role="tablist">
	                    <li class="nav-item" role="presentation">
	                        <a class="nav-link active" id="not_resgisted" data-toggle="tab" href="#notResgisted" role="tab" aria-controls="notResgisted" aria-selected="true">登録済みでない方</a>
	                    </li>
	                    <li class="nav-item" role="presentation">
	                        <a class="nav-link " id="resgisted" data-toggle="tab" href="#registedID" role="tab" aria-controls="registedID" aria-selected="false">登録済みの方</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
        </div>
        <div id="myTabContent" class="tab-content form-content">
        	
        	<div class="tab-pane fade show active" id="notResgisted" role="tabpanel" aria-labelledby="not_resgisted">
        		<?php include 'form-register.php'; ?>
			</div>

			<div class="tab-pane fade" id="registedID" role="tabpanel" aria-labelledby="resgisted">
				<?php include 'form-login.php'; ?>
			</div>
        </div>
    </div> 
	</div>
</section>