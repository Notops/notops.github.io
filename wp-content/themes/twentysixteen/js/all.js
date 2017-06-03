// Файл all.js - общие функции для Сайта и Панели управления
//
// version v1.0 10.04.2011
// author Дмитрий Щербаков <info@atomcms.ru>

$(function()
{
	$('.jquery-tooltip').tooltip({track: true, delay: 0, showURL: false, showBody: '|'});

	$('a.myvideo').each(function(){
		var flashvars = {};
		flashvars.movie = $(this).text();
		flashvars.autoplay = "false";
		flashvars.loop = "false";
		flashvars.autohide = "false";
		flashvars.fullscreen = "true";
		flashvars.color_text = "0xFFFFFF";
		flashvars.color_seekbar = "0x13ABEC";
		flashvars.color_loadingbar = "0x828282";
		flashvars.color_seekbarbg = "0x333333";
		flashvars.color_button_out = "0x333333";
		flashvars.color_button_over = "0x000000";
		flashvars.color_button_highlight = "0xffffff";

		var params = {};
		params.allowfullscreen = "true";
		params.allowscriptaccess = "always";
		params.bgcolor = "#000000";

		var attributes = {};
		attributes.align = "middle";

		swfobject.embedSWF(cmsPathRoot + '/inc/player.swf', $(this).attr('id'), '400', '300', '9.0.45', '', flashvars, params, attributes);
	});

	$('span.myaudio').jmp3({
		showfilename: 'false',
		backcolor: '000000',
		forecolor: '00ff00',
		width: 150,
		showdownload: 'true'
	});
});