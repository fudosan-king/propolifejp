/* krpano 1.18.1 soundinterface plugin (build 2014-11-19) */
var krpanoplugin=function(){function s(){m(!document.hidden)}function B(){}function C(){var a=arguments;if(1<a.length){var b=String(a[0]).toLowerCase(),n=a[1],D=2<a.length?parseInt(a[2]):1,k=3<a.length?a[3]:null;if("auto"==b||"null"==b||""==b)b="autoid_"+c.timertick+"_"+Math.ceil(1E3*c.random);var g=n,a=g.split("|");if(1<a.length){if(null==e&&(e="",g=document.createElement("audio"),!(null===g||void 0===g)))if(e+=".wav",void 0!==g.canPlayType){var h=g.canPlayType("audio/ogg");h.match(/maybe|probably/i)&&
(e+=".ogg",e+=".oga");!1==(c.device.android&&c.device.firefox)&&(h=g.canPlayType("audio/mpeg"),h.match(/maybe|probably/i)&&(e+=".mp3",e+=".mp2",e+=".mpa"));h=g.canPlayType("audio/mp4");h.match(/maybe|probably/i)&&(e+=".mp4");h=g.canPlayType("audio/wav");h.match(/maybe|probably/i)&&(e+=".wav")}else e+=".mp3";var h=a.length,l,g=null;for(l=0;l<h;l++){var p=String(a[l]).toLowerCase(),p=p.slice(p.lastIndexOf("."));if(0<e.indexOf(p)){g=a[l];break}}null==g&&(g=a)}a=w.rootpath;null!=a&&0<a.length&&"null"!=
String(a).toLowerCase()?"/"!=a.charAt(a.length-1)&&(a+="/"):a="";var n=a=unescape(c.parsePath(a+g)),d=null;if(q&&x&&void 0!==f[b]){d=f[b];try{d.currentTime=0,d.pause()}catch(m){}f[b]=null;delete f[b];d=null}if(null!=d||void 0!==f[b]){null==d?d=f[b]:f[b]=d;try{d.currentTime=0,d.pause()}catch(r){}}else{d=document.createElement("audio");if(!d){c.trace(2,y);return}d.addEventListener("error",function(){c.trace(3,"soundinterface - loading of "+n+" failed!");f[b]=null;delete f[b];d=null},!0);d.addEventListener("ended",
function(){try{0<d.loopcount?(d.loopcount--,0==d.loopcount?k&&c.call(k):(d.currentTime=0,d.play())):(d.currentTime=0,d.play())}catch(a){}},!0);f[b]=d}try{if(d.loopcount=D,d.src=n,d&&(d.volume=t,d.play()),q&&d&&d.paused){var u=document.body,v=function(){try{u.removeEventListener("touchstart",v,!0),j&&j.paused&&!j.ended&&j.play()}catch(a){j=null}};u.removeEventListener("touchstart",v,!0);j=d;u.addEventListener("touchstart",v,!0)}}catch(s){c.trace(2,y)}}}function E(a){if(a=f[String(a).toLowerCase()])try{a.pause()}catch(b){}}
function F(a){if(a=f[String(a).toLowerCase()])try{a.paused&&a.play()}catch(b){}}function G(a){if(a=f[String(a).toLowerCase()])try{a.paused?a.play():a.pause()}catch(b){}}function H(a){if(a=f[String(a).toLowerCase()]){a==j&&(j=null);try{a.currentTime=0,a.pause()}catch(b){}}}function z(){var a,b;for(a in f)if((b=f[a])&&void 0!==b.paused){try{b.pause()}catch(c){}f[a]=null}f=[];j=null}function m(a){var b,c;for(b in f){c=f[b];try{c&&void 0!==c.paused&&(!1==a?!1==c.paused&&(c.pause(),c.needresume=!0):c.needresume&&
c.play())}catch(e){}}}function A(){t=k?0:r;var a,b;for(a in f)if(b=f[a])try{b.volume=t,q&&(k?!1==b.paused&&(b._krp_muted=!0,b.pause()):!0==b._krp_muted&&(b._krp_muted=!1,b.play()))}catch(c){}}var w=null,c=null,f=[],j=null,q=!1,x=!1,y="Soundinterface Plugin - HTML5 audio is not supported by this browser!",r=1,k=!1,t=1;this.registerplugin=function(a,b,e){c=a;w=e;"1.16">c.version?c.trace(3,"Soundinterface Plugin - too old krpano version, min. version is 1.16!"):(e.keep=!0,e.registerattribute("rootpath",
""),e.registerattribute("volume",1,function(a){r=a;A()},function(){return r}),e.registerattribute("mute",!1,function(a){k=0<="yesontrue1".indexOf(String(a).toLowerCase());A()},function(){return k}),c.soundinterface=e,c.preloadsound=B,c.playsound=C,c.pausesound=E,c.resumesound=F,c.pausesoundtoggle=G,c.stopsound=H,c.stopallsounds=z,a=navigator.userAgent,b=a.indexOf("OS "),0<b&&(b+=3,"4.2">a.slice(b,a.indexOf(" ",b)).split("_").join(".")&&(x=!0)),q=c.device.ios||c.device.android,window.addEventListener("pagehide",
function(){m(!1)},!1),window.addEventListener("pageshow",function(){m(!0)},!1),document.addEventListener("visibilitychange",s))};this.unloadplugin=function(){try{z(),document.removeEventListener("visibilitychange",s)}catch(a){}};var e=null};
