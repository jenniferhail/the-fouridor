var nf,
notification = {
	settings: {
		notice: $('.notification'),
		close: $('.notification .close')
	},
	init: function() {
		nf = this.settings;
		this.bindUIActions();
		console.log('notification loaded!');
	},
	bindUIActions: function() {
		nf.close.on('click', function() {
			nf.notice.addClass('hide');
		});
	}
};
