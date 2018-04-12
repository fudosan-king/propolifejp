$(function(){
	$("#mailform").validate({
		rules: {
			sei :{
				required: true
			},
			mei :{
				required: true
			},
			sex :{
				required: true
			},
			family :{
				required: true
			},
			address1 :{
				required: true,
			},
			address2 :{
				required: true
			},
			address3 :{
				required: true
			},
			tel1 :{
				required: true,
			},
			mailaddress :{
				required: true,
				email: true
			},
			job :{
				required: true
			},
			budget :{
				required: true
			},
			room :{
				required: true
			},
			room_size :{
				required: true
			},
			residence :{
				required: true
			},
			sites :{
				required: true
			},
			question :{
				required: true
			},
			answer :{
				required: true
			},
			agree :{
				required: true
			}
		},
		messages: {
			sei :{
				required: "姓が未入力です。"
			},
			mei :{
				required: "名が未入力です。"
			},
			sex :{
				required: "性別がチェックされていません。"
			},
			family :{
				required: "家族数が未入力です。"
			},
			address1 :{
				required: "都道府県が選択されていません。",
			},
			address2 :{
				required: "市区町村が未入力です。"
			},
			address3 :{
				required: "丁目番地が未入力です。"
			},
			tel1 :{
				required: "電話番号が未入力です。"
			},
			mailaddress :{
				required: "メールアドレスを入力してください。",
				email: "正しいメールアドレスを入力してください。"
			},
			job :{
				required: "ご職業が未入力です。"
			},
			budget :{
				required: "ご予算が未入力です。"
			},
			room :{
				required: "ご希望間取りが未入力です。"
			},
			room_size :{
				required: "ご希望の広さが未入力です。"
			},
			residence :{
				required: "現在の居住形態が未入力です。"
			},
			sites :{
				required: "どちらでこのサイトを知りましたか？がチェックされていません。"
			},
			question :{
				required: "「プロスタイル横浜馬車道」についてどう思われますか？がチェックされていません。"
			},
			answer :{
				required: "元住吉エリアとのご関連をお聞かせください。がチェックされていません。"
			},
			agree :{
				required: "個人情報の取り扱いについてがチェックされていません。"
			}
		},			

		//表示位置指定
    errorPlacement: function(error, element) {
      switch(element.attr('name')) {
        case "sei":
          error.appendTo($('#sei'));
          break;
        case "mei":
          error.appendTo($('#mei'));
          break;
        case "sex":
          error.appendTo($('#sex'));
          break;
		case "family":
          error.appendTo($('#family'));
          break;
		case "address1":
          error.appendTo($('#address1'));
          break;
		case "address2":
          error.appendTo($('#address2'));
          break;
		case "address3":
          error.appendTo($('#address3'));
          break;
		case "tel1":
          error.appendTo($('#tel1'));
          break;
		case "mailaddress":
          error.appendTo($('#mailaddress'));
          break;
		case "job":
          error.appendTo($('#job'));
          break;
		case "budget":
          error.appendTo($('#budget'));
          break;
		case "room":
          error.appendTo($('#room'));
          break;
		case "room_size":
          error.appendTo($('#room_size'));
          break;
		case "residence":
          error.appendTo($('#residence'));
          break;
		case "sites":
          error.appendTo($('#sites'));
          break;
		case "question":
          error.appendTo($('#question'));
          break;
		case "answer":
          error.appendTo($('#answer'));
          break;
		case "agree":
          error.appendTo($('#agree'));
          break;
        default:
          error.insertAfter(element);
      }
    }

});
			
})



