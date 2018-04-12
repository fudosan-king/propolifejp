var canvas, stage, exportRoot;
var sinceNo ,nowSince, nextSince;
var loaderText = new createjs.Text("", "10px Arial", "#666666");
var loaderText2 = new createjs.Text("", "10px Arial", "#666666");
var loaderLine = new createjs.Graphics();
var loaderShape=new createjs.Shape(loaderLine);

function init() {
	canvas = document.getElementById("canvas");
	images = images||{};
	stage = new createjs.Stage(canvas);
	
	var protocol = document.location.protocol;
	console.log('protocol>>'+protocol);
	if(protocol == "http:" || protocol == "https:"){
		var loader = new createjs.LoadQueue(true);
	}else{
		var loader = new createjs.LoadQueue(false);
	}
	loader.addEventListener("progress", handleProgress);
	loader.addEventListener("fileload", handleFileLoad);
	loader.addEventListener("complete", handleComplete);
	loader.loadManifest(lib.properties.manifest);
}
function handleProgress(event) {
    var progress = Math.floor(event.progress*100);
	loaderText.text = progress+"%";
	loaderText.x=canvas.width/2 - loaderText.getMeasuredWidth()/2;
    loaderText.y=canvas.height/2+5;
	stage.addChild(loaderText);
	
	loaderText2.text = "Loading";
	loaderText2.x=canvas.width/2 - loaderText2.getMeasuredWidth()/2;
	loaderText2.y=canvas.height/2-18;
	stage.addChild(loaderText2);
	
	loaderLine.beginStroke("#666666");
	loaderLine.setStrokeStyle(1);
	loaderLine.moveTo(canvas.width/2-100,canvas.height/2-0.5);
	loaderLine.lineTo(canvas.width/2-100+progress*2,canvas.height/2-0.5);
	stage.addChild(loaderShape);
	stage.update();
}
function handleFileLoad(evt) {
	if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
}
function handleComplete(evt) {
	stage.addChild(loaderText);
	loaderLine.lineTo(canvas.width/2-100+200,canvas.height/2-0.5);
	stage.addChild(loaderShape);
	stage.update();
	setTimeout( function(){
		exportRoot = new lib.movie();
		stage.addChild(exportRoot);
		stage.update();
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}, 50);
}