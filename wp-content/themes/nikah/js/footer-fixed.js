(function($) {

	'use strict';

	$(document).ready(function() {

		if($('#footer')[0]) {
			if (document.querySelector("#footer").classList.contains("fixed-footer")) {
				$("#content").addClass('has-fixed-footer');
			}
		}
	});

	$(document).ready(function() {
		var mainWrapper = $('#content');
		var footerHeight = $('#footer').height();

			mainWrapper.css('margin-bottom', footerHeight);
	});


})( jQuery );