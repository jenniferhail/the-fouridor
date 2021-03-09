// This js file is used for opening and closing the main content box.

var mc,
mainContent = {
	settings: {
		sidebar: document.getElementById('sidebar'),
		main: document.getElementById('main'),
		sideNav: document.getElementById('side-nav'),
		close: document.getElementById('close')
	},
	init: function() {
		mc = this.settings;
		this.bindUIActions();
		console.log('main content loaded!');
	},
	bindUIActions: function() {
		mc.close.addEventListener('click', function () {
			mc.sidebar.classList.remove('active');
			mc.sidebar.classList.add('inactive');
			setTimeout(function(){
				mc.sidebar.classList.remove('inactive');
			}, 1100);
		});
	}
};
