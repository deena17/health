textResizer = $(function (){

	// Set Cookie
	var docCookies = {
	  getItem: function (sKey) {
	    if (!sKey) { return null; }
	    return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
	  },
	  setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
	    if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
	    var sExpires = "";
	    if (vEnd) {
	      switch (vEnd.constructor) {
	        case Number:
	          sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
	          break;
	        case String:
	          sExpires = "; expires=" + vEnd;
	          break;
	        case Date:
	          sExpires = "; expires=" + vEnd.toUTCString();
	          break;
	      }
	    }
	    document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
	    return true;
	  },
	  removeItem: function (sKey, sPath, sDomain) {
	    if (!this.hasItem(sKey)) { return false; }
	    document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
	    return true;
	  },
	  hasItem: function (sKey) {
	    if (!sKey) { return false; }
	    return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
	  },
	  keys: function () {
	    var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
	    for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
	    return aKeys;
	  }
	};

	function changeSize(element, size) {
	    var current = parseInt(docCookies.getItem("FontSize"));
	    var newSize;
	    if (current !== "") {
	        current = parseInt(element.css('font-size'));
	    }
	    if (size === 'decrease') {
	        if (current > 14) {
	            newSize = current - 2;
	        }
	    } else if (size === 'increase') {
	        if (current < 20) {
	            newSize = current + 2;
	        }
	    }

	    element.css('font-size', newSize + 'px');
	    docCookies.setItem("FontSize", newSize, Infinity);
	}

	$('#decreaseFont').click(function (e) {
		changeSize(text, 'decrease');
		e.preventDefault();
	});

	$('#increaseFont').click(function (e) {
	   changeSize(text, 'increase');
	   e.preventDefault();
	});

	$('#defaultFont').click(function(e) {
	    text.css('font-size', '16px');
	    docCookies.setItem("FontSize", '16px', Infinity);
		console.log(docCookies.getItem('bgColor'))
	});

	$('#highContrast').click(function(e) {
		var elems = $("body, .body-inner, header,nav, .navbar, #main-content, a, th, td, div,div.bg-white, .header-one");
	    elems.css('background-color', 'black');
	    elems.css('color', 'yellow');
		$('.navbar').css('border-top', '1px solid');
	    docCookies.setItem("bgColor", '#000000');
		docCookies.setItem('frColor', '#e5e513');
	});

	$('#normalMode').click(function(e) {
		docCookies.removeItem("bgColor");
		docCookies.removeItem('frColor');
		location.reload();

	});

	var text = $("body, a.nav-link, footer"),
		 fontSize = docCookies.getItem("FontSize");
	if (fontSize) {
	    text.css('font-size', fontSize + 'px');
	}

	var elems = $("body, .body-inner, header,nav, .navbar, #main-content, a, th, td, div,div.bg-white, .header-one");
	$('.navbar').css('border-top', '1px solid');
	$('footer').css('border-top', '1px solid');
	elems.css('background-color', docCookies.getItem('bgColor'));
	elems.css('color', docCookies.getItem('frColor'));

});


$(document).ready(function() {
	$("#gsc-i-id1").attr("placeholder", "Search here...");
});
