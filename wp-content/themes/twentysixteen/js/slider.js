<!--
	function NextSliderItem() {
		if (window.slider_action == false) {
			window.slider_action = true;
			clearTimeout(window.slider_interval);
			$('#slider .items-container').animate({'marginLeft': '-' + window.oneelement + 'px'}, 500, function(){
				$('#slider .items-container .oneitem:first-child').clone().appendTo('#slider .items-container');
				$('#slider .items-container .oneitem:first-child').remove();
				$('#slider .items-container').css({'marginLeft': '0px'});
				window.slider_interval = setTimeout('NextSliderItem()', 4000);
				window.slider_action = false;
			});
		};
	};
	
	function PrevSliderItem() {
		if (window.slider_action == false) {
			window.slider_action = true;
			clearTimeout(window.slider_interval);
			$('#slider .items-container .oneitem:last-child').clone().prependTo('#slider .items-container');
			$('#slider .items-container').css({'marginLeft': '-' + window.oneelement + 'px'});
			$('#slider .items-container').animate({'marginLeft': '0px'}, 500, function(){
				$('#slider .items-container .oneitem:last-child').remove();
				window.slider_interval = setTimeout('NextSliderItem()', 4000);
				window.slider_action = false;
			});
		};
	};
	
	$(document).ready(function(){
		window.oneelement = 330; // width + horizontal margins
		window.slider_action = false;
		window.slider_interval = setTimeout('NextSliderItem()', 4000);

		$('#slider .items-container').mouseenter(function(){clearTimeout(window.slider_interval);});
		$('#slider .items-container').mouseleave(function(){window.slider_interval = setTimeout('NextSliderItem()', 4000);});
	});
//-->