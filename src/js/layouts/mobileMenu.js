var mm,
mobileMenu = {
	settings: {
		sidebar: $('.sidebar'),
		button: $('.mobile-menu-btn')
	},
	init: function() {
		mm = this.settings;
		this.bindUIActions();
		console.log('mobileMenu loaded!');
	},
	bindUIActions: function() {
		// mm.sidebar.addClass('mobile-closed');
		mm.button.on('click', function(evt) {
			console.log('Menu button was clicked.');
			evt.preventDefault();
			if (mm.sidebar.hasClass('mobile-closed')) {
				mm.sidebar.removeClass('mobile-closed');
				mm.sidebar.addClass('mobile-open');
				mm.button.html('<span>Close</span>');
			} else if (mm.sidebar.hasClass('mobile-open')) {
				mm.sidebar.removeClass('mobile-open');
				mm.sidebar.addClass('mobile-closed');
				mm.button.html('<span>Menu</span>');
			}
		});
	}
};
