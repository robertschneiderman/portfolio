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

	function Tabs( el, options ) {
		this.el = el;
		this.options = extend({}, this.options);
		extend(this.options, options);

		this._init();
	}

	Tabs.prototype.options = {
		start: 0
	};

	Tabs.prototype._init = function() {
		this.tabs = [].slice.call( this.el.querySelectorAll( '.tabs-list li' ) );
		this.items = [].slice.call( this.el.querySelectorAll( '.tabs__content > div' ) );

		// console.log([].slice.call( this.el.querySelectorAll( '.tabs-list li' )));		

		this.current = 1; 		

		this.show();		

		this._initEvents();
	};

	Tabs.prototype._initEvents = function() {	
		var self = this;

		for (var i = 0; i < this.tabs.length; i++) {
			(function(self, i) {
				self.tabs[i].addEventListener( 'click', function( ev ) {
					ev.preventDefault();
					self.show( i );
				});
			}(self, i));
		};

		this.tabs.forEach(function( tab, idx ) {
 
		});	
	}

	Tabs.prototype.hide = function( current ) {
		var self = this;
		if(current > -1) {
			self.tabs[ current ].classList.remove('is-active');
			self.tabs[ current ].classList.add('hiding');			
			$(self.items[ current ]).removeClass('is-active').trigger('resetPB');
			self.items[ current ].classList.add('hiding');			

			setTimeout(function() {
				self.tabs[ current ].classList.remove('hiding');
				self.items[ current ].classList.remove('hiding');
			}, 400)
		}
	}

	Tabs.prototype.show = function( idx ) {
		// console.log(idx);		
		if(idx != this.current) {
			this.hide( this.current );	
			this.current = idx != undefined ? idx : this.options.start >= 0 && this.options.start < this.items.length ? this.options.start : 2;
			this.tabs[ this.current ].classList.add('is-active');
			if( idx != undefined) {
				$(this.items[ this.current ]).addClass('is-active').trigger('activatePB');
			}
		}
	};

	window.Tabs = Tabs;

})(window);