var ax,
ajax = {
	settings: {
		history: {},
		links: $('li.menu-item-object-page a'),
		footerLinks: $('.footer li.menu-item-object-page a'),
		wrapper: $('#main .wrapper .content'),
		content: $('#main .wrapper .content .ajax-wrapper'),
		sidebar: $('#sidebar'),
		main: $('#main'),
		closeBtn: $('#close')
	},
	init: function() {
		ax = this.settings;
		this.bindUIActions();
		console.log('ajax loaded!');
	},
	bindUIActions: function() {
		if (ax.links.length > 0) {
			ax.links.on('click', function(evt) {
				evt.preventDefault();
				$('.loader-wrapper').removeClass('hide').addClass('animate');
				// Start animation here. Unhide or set to display
				ajax.changePage($(this));
			});
		}
		ax.closeBtn.on('click', function(evt) {
			ajax.changeUrl('/');
		});
		window.addEventListener('popstate', function(e) {
			if(window.location.pathname == '/'){
				// Remove active class from sidebar. Remove content from ajax wrapper
				ax.sidebar.removeClass('active');
				ax.sidebar.addClass('inactive');
				setTimeout(function(){
					ax.sidebar.removeClass('inactive');
				}, 1100);
			} else {
				// Do the state lookup/var set whatev
				if (e.state && e.state.newUrl.length > 0) {
					var backUrl = ajax.parseUrl(e.state.newUrl);
					ax.wrapper.html(history[backUrl]);
					if (!ax.sidebar.hasClass('active')) {
						ax.sidebar.addClass('active');
					}
				}
			}
		});
	},
	changePage: function($ele){
		var href = $ele.attr('href');
		var pageTitle = $ele.text();
		ax.content.remove();
		ax.wrapper.load(href + ' #main .wrapper .content .ajax-wrapper', function(responseText) {
			var parsedUrl = ajax.parseUrl(href);
			history[parsedUrl] = $(responseText).find('#main .wrapper .content .ajax-wrapper');
			$('.loader-wrapper').removeClass('animate').addClass('hide');
			ax.sidebar.addClass('active');
			ajax.changeUrl(href);
			document.title = pageTitle + ' – The Fouridor';
			// Hide animation here, after content is loaded.
			ajax.initSlider();
			ajax.initGravityForms();
			ax.main.scrollTop(0);
		});
	},
	changeUrl: function(link) {
		var stateObj = { newUrl: link };
		history.pushState(stateObj, "New Page", link);
	},
	parseUrl: function(url) {
		url = url.replace('.html', '');
		// url = url.replace('http://', '');
		splitUrl = url.split('.com');
		// console.log('Split url: ' + splitUrl);
		url = splitUrl[1];
		return url;
	},
	initSlider: function() {
		// console.log('Reinit the slider');
		// $('.glide .glide__slide:last-child img').one().load(function(){
			setTimeout(function(){
				// console.log('last image loaded');
				slider.init();
				// slider.changeHeight();
			}, 501);
		// });
	},
	initFancybox: function() {
		if ($('[data-fancybox="gallery"]').length > 0) {
			$('[data-fancybox="gallery"]').fancybox({
				// Options will go here
			});
		}
	},
	initGravityForms: function() {
		// console.log('Running initGravityForms');
		if ($('.gform_wrapper').length > 0 && $('#gforms_formsmain_css-css').length == 0) {
			// console.log('.gform_wrapper exists');
			var bodyTag = $('body');
			bodyTag.append("<link rel='stylesheet' id='gforms_reset_css-css' href='http://staging.thefouridor.com/app/plugins/gravityforms/css/formreset.css?ver=2.4.6' type='text/css' media='all' /><link rel='stylesheet' id='gforms_formsmain_css-css' href='http://staging.thefouridor.com/app/plugins/gravityforms/css/formsmain.css?ver=2.4.6' type='text/css' media='all' /><link rel='stylesheet' id='gforms_ready_class_css-css' href='http://staging.thefouridor.com/app/plugins/gravityforms/css/readyclass.css?ver=2.4.6' type='text/css' media='all' /><link rel='stylesheet' id='gforms_browsers_css-css' href='http://staging.thefouridor.com/app/plugins/gravityforms/css/browsers.css?ver=2.4.6' type='text/css' media='all' /><script type='text/javascript' src='http://staging.thefouridor.com/app/plugins/gravityforms/js/placeholders.jquery.min.js?ver=2.4.6'></script>");
		}
	}
};
