(function() {
	'use strict';

	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}	
	
	function Modal(el, options) {
		this.el = document.querySelector(el);
		this.options = extend({}, this.options);
		extend(this.options, options);

		this._init();
	}

	Modal.prototype._init = function() {
		// this.openBtn = document.querySelector('#modal-open-btn');
		this.closeBtn = this.el.querySelector('.modal__btn');		

		this._initEvents();
		// this._buildModal();
	}

	Modal.prototype._initEvents = function() {
		var self = this;
		// this.openBtn.addEventListener('click', function(e) {
		// 	e.preventDefault();
		// 	self._open();
		// });
		this.closeBtn.addEventListener('click', function(e) {
			e.preventDefault();
			self._close();
		});		
	}

	// Modal.prototype._buildModal = function() {
	// 	this.dialog = "<div>";
	// 	this.dialog += "<div class='dialog'>";
	// 	this.dialog += "<div class='dialog__btn'></div>";
	// 	this.dialog += "<div class='dialog__content'>"
	// 	this.dialog += "<h3>Sample Dialog</h3>"
	// 	this.dialog += "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, deserunt natus! Maiores ratione laborum assumenda nobis natus temporibus illum ad.</p>"
 //   		this.dialog += "</div>" 
 //   		this.dialog += "</div>"        
	// }

	Modal.prototype._open = function() {
		if(classie.has(this.el, 'is-active')) return;

		classie.add(this.el, 'is-active');
	}

	Modal.prototype._close = function() {
		classie.remove(this.el, 'is-active');
	}

	window.Modal = Modal;


})(window);