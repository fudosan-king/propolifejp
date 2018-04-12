<!--HPB_SCRIPT_CODE_40
function _HpbShowObj(lId)
{
  var ob;ob=new Array;
  var appVer=parseInt(navigator.appVersion);
  var isNC=false,isN6=false,isIE=false;
  if (document.all && appVer >= 4) isIE=true; else
    if (document.getElementById && appVer > 4) isN6=true; else
      if (document.layers && appVer >= 4) isNC=true;
  if (isNC)
  {
    w_str = "document." + lId;ob[lId] = eval(w_str);
    if (!ob[lId]) ob[lId] = _HpbFindHiddenObj(document, lId);
    if (ob[lId]) ob[lId].visibility = "show";
  }
  if (isN6)
  {
    ob[lId] = document.getElementById(lId);
    ob[lId].style.visibility = "visible";
  }
  if (isIE)
  {
    w_str = "document.all.item(\"" + lId + "\").style";ob[lId] = eval(w_str);
    ob[lId].visibility = "visible";
  }
}

function _HpbFindHiddenObj(doc, lId)
{
  for (var i=0; i < doc.layers.length; i++)
  {
    var w_str = "doc.layers[i].document." + lId;
    var obj;obj=new Array;
    obj[lId] = eval(w_str);
    if (!obj[lId]) obj[lId] = _HpbFindHiddenObj(doc.layers[i], lId);
    if (obj[lId]) return obj[lId];
  }
  return null;
}
//-->

<!--HPB_SCRIPT_CODE_40
function _HpbHideObj(lId)
{
  var ob;ob=new Array;
  var appVer=parseInt(navigator.appVersion);
  var isNC=false,isN6=false,isIE=false;
  if (document.all && appVer >= 4) isIE=true; else
    if (document.getElementById && appVer > 4) isN6=true; else
      if (document.layers && appVer >= 4) isNC=true;
  if (isNC)
  {
    w_str = "document." + lId;ob[lId] = eval(w_str);
    if (!ob[lId]) ob[lId] = _HpbFindShownObj(document, lId);
    if (ob[lId]) ob[lId].visibility = "hide";
  }
  if (isN6)
  {
    ob[lId] = document.getElementById(lId);
    ob[lId].style.visibility = "hidden";
  }
  if (isIE)
  {
    w_str = "document.all.item(\"" + lId + "\").style";ob[lId] = eval(w_str);
    ob[lId].visibility = "hidden";
  }
}

function _HpbFindShownObj(doc, lId)
{
  for (var i=0; i < doc.layers.length; i++)
  {
    var w_str = "doc.layers[i].document." + lId;
    var obj;obj=new Array;
    obj[lId] = eval(w_str);
    if (!obj[lId]) obj[lId] = _HpbFindShownObj(doc.layers[i], lId);
    if (obj[lId]) return obj[lId];
  }
  return null;
}

function disp(url){

	window.open(url, "subwindow", "width=380,height=360,scrollbars=yes");
	w.focus();

}

if (document.images) {

	// 設定開始（使用する画像を設定してください）

	// 画像1
	var img1on = new Image();
	img1on.src = "img/pvarrowon.gif"; // ポイント時の画像
	var img1off = new Image();
	img1off.src = "img/pvarrow.gif"; // 通常の画像
	
	// 画像2
	var img2on = new Image();
	img2on.src = "img/pvarrowon.gif";
	var img2off = new Image();
	img2off.src = "img/pvarrow.gif";

	// 画像3
	var img3on = new Image();
	img3on.src = "img/pvarrowon.gif";
	var img3off = new Image();
	img3off.src = "img/pvarrow.gif";

	// 画像4
	var img4on = new Image();
	img4on.src = "img/pvarrowon.gif";
	var img4off = new Image();
	img4off.src = "img/pvarrow.gif";

	// 画像5
	var img5on = new Image();
	img5on.src = "img/pvarrowon.gif";
	var img5off = new Image();
	img5off.src = "img/pvarrow.gif";


	// 設定終了

}

// ポイント時の処理
function On(name) {

	if (document.images) {

		document.images[name].src = eval(name + 'on.src');

	}

}

// 放した時の処理
function Off(name) {

	if (document.images) {

		document.images[name].src = eval(name + 'off.src');

	}

}
function wopen1(){

win=window.open("http://www.testa-shindan.co.jp/FormMail/document/FormMail.html","new","scrollbars=1,toolbar=1,width=620,height=720");
}
//-->
