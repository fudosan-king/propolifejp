var userAgent = window.navigator.userAgent;
var metalist = document.getElementsByTagName('meta');
for(var i = 0; i < metalist.length; i++) {
    var name = metalist[i].getAttribute('name');
    if(name && name.toLowerCase() === 'viewport' && userAgent.indexOf('SC-01F') > 0) {
        metalist[i].setAttribute('content', 'target-densitydpi=medium-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui');
        break;
    }
    if(name && name.toLowerCase() === 'viewport' && userAgent.indexOf('SCL22') > 0) {
        metalist[i].setAttribute('content', 'target-densitydpi=medium-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui');
        break;
    }
}

