document.cookie = "resolution=" + Math.max(screen.width, screen.height) + ("devicePixelRatio" in window ? "," + devicePixelRatio : ",1") + "; path=../";

// Picture element HTML5 shiv
document.createElement( "picture" );

// (function() {
// 	var images = document.getElementsByTagName('img');
// 	Array.prototype.slice.call(images).forEach(function(img) {
// 	    var srcsetVal = img.getAttribute('srcset');            
// 	    var srcsetVal = img.removeAttribute('srcset').setAttribute('data-srcset', srcsetVal);
// 	    img.className = img.className + " lazyload";
// 	});
// }());