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

	function Accordian( el, options ) {
		this.el = el;
		this.options = extend( {}, this.options );
		extend( this.options, options );

		this._init();
	};

	Accordian.prototype._init = function() {
		this.trigger = this.el.find('.accordian-trigger');
		this.headline = this.trigger.find('.secondary-headline__title--toggle');
		this.content = this.el.find('.accordian-content');

		this._initEvents();	
	};

	Accordian.prototype._initEvents = function() {
		var self = this;
		this.trigger.click(function(ev) {
			ev.preventDefault();
			self.headline.toggleClass('is-active');
			self.content.toggleClass('is-visible');
		});
	};

	// Accordian.prototype._show = function() {
	// 	if( classie.has( this.content, 'is-visible' ) ) {
	// 		classie.remove( this.content, 'is-visible' );
	// 	}
	// 	else {
	// 		classie.add( this.content, 'is-visible' );			
	// 	}
	// };

	window.Accordian = Accordian;
})(window);