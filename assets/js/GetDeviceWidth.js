function GetDeviceWidth() {
    if (!document.getElementById) return;
    var width;
    var height;

    if (navigator.userAgent.indexOf('Android') >= 0 || navigator.userAgent.indexOf('Windows Phone') >= 0) {
        width = window.screen.width / window.devicePixelRatio;
        height = window.screen.height / window.devicePixelRatio;
    }
    else {
        width = window.screen.width;
        height = window.screen.height;
    }

    if (navigator.userAgent.indexOf('Android') >= 0 || navigator.userAgent.indexOf('iPhone') >= 0) {
        if (height > width) {
            width = height;
        }
    }
    document.cookie = "ScreenWidth=" + width.toString() + "; expires=Thu, 31 Dec 2037 12:00:00 UTC";
    try {
        var hiddenvar = document.getElementById("ScreenWidth");
        hiddenvar.value = width;
    }
    catch (err) {
    }

    //window.alert('computed width = ' + width + '; screen.width = ' + window.screen.width + '; screen.height = ' + window.screen.height
    //+ '; screen.availWidth = ' + window.screen.availWidth + '; screen.availHeight = ' + window.screen.availHeight
    //+ '; windw.innerWidth = ' + window.innerWidth + '; window.innerHeight = ' + window.innerHeight
    //+ '; windw.outerWidth = ' + window.outerWidth + '; window.outerHeight = ' + window.outerHeight
    //+ '; document.body.clientWidth = ' + document.body.clientWidth + '; document.body.clientHeight = ' + document.body.clientHeight
    //+ '; window.devicePixelRatio = ' + window.devicePixelRatio
    //+ '; navigator.userAgent = ' + navigator.userAgent);
}
