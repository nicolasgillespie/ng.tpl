$(document).ready(function(){
	resize();

	/* Verify if the ng-filter.min.js file has been imported (it adds ng-filter true to the html.data) */
	function resize() {
		$('body').css({
			"min-height": ($(window).height()),
		});

		var headerHeight = $('header').outerHeight(true);
		var footerHeight = $('footer').outerHeight(true);
		var contentPadding = parseFloat($('.content').css('padding-top')) + parseFloat($('.content').css('padding-bottom'));
		var contentHeight = $(window).height() - (headerHeight + footerHeight + contentPadding);

		$('.content').css({
			"min-height": (contentHeight),
		});

	}



});
