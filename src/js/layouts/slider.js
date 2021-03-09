var sl,
slider = {
	settings: {
		glideEl: $('.glide'),
	},
	init: function() {
		sl = this.settings;
		this.bindUIActions();
		console.log('glide loaded!');
	},
	bindUIActions: function() {
		if ($('.glide').length > 0) {
			// console.log('Found a glide slider');
			var glide = new Glide('.glide', {
				type: 'carousel',
				perView: 1,
				animationTimingFunc: 'ease',
				animationDuration: 800
			})
			glide.on('mount.after', function() {
				// console.log('Mount.after is running');
				slider.changeHeight();
			});
			// Change the slider height based on slide height
			glide.on('run.after', function() {
				// console.log('Run.after is running');
				slider.changeHeight();
			});
			glide.on('resize', function() {
				slider.changeHeight();
			});
			glide.mount();
		}
	},
	changeHeight: function() {
		var slideHeight = $('.glide__slide--active').outerHeight();
		// console.log('Active slide height = ' + slideHeight);
		var glideTrack = $('.glide__track').outerHeight();
		// console.log('Glide track height = ' + glideTrack);
		if (slideHeight != glideTrack) {
			var newHeight = slideHeight;
			$('.glide__track').css('height', newHeight);
			// console.log($('.glide__track').outerHeight());
			console.log('Change slider height.');
		}
	}
};
