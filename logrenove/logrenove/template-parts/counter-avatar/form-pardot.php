<div class="form-group">
	<p>相談希望日時</p>
	<div class="row">
		<div class="col-2 col-md-1">
			<label class="title">必 須</label>
		</div>
		<div class="col-10 col-md">
			<input placeholder="日付を選択" class="form-control datepicker required" type="text" name="date" value="" autocomplete="off">
			<i class="calendar"></i>
		</div>
		<div class="col-10 col-md left-sp-auto">
			<select name="time" class="form-control custom-select required">
            </select>
            <i class="cirkle-turquoise-right"></i>
		</div>
		<input type="hidden" name="action" value="send_pardot">
	</div>
</div>
