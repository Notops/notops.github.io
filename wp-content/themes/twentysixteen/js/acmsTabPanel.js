// Файл acmsTabPanel.js - AtomCMS Tab Panel plugin for jQuery
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>
(function($) {
	$.acmsTabPanel = function(tab) {
		$('.acmsTabPanel-hidden:eq(' + tab + ')').css('display', 'block');
		$('ul.acmsTabPanel a:eq(' + tab + ')').addClass('acmsTabPanel-active');

		$('ul.acmsTabPanel a').each(function() {
			$(this).click(function() {
				$('ul.acmsTabPanel a').each(function() {
					$(this).removeClass();
				});

				$('.acmsTabPanel-hidden').css('display', 'none');
				$(this).addClass('acmsTabPanel-active');
				$('#' + $(this).attr('rel')).css('display', 'block');
				return false;
			});
		});
	}
})(jQuery);