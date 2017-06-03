$(window).load(function(){
	$('.reasons span.name').click(function(){
		$('.reasons .txt').addClass('hidden');
		$(this).next('.txt').removeClass('hidden').slideToggle(200);
	})
	$('.oneitem .name').click(function(){
		$('.oneitem .text').addClass('hidden');
		$(this).siblings('.text').removeClass('hidden').slideToggle(200);
	})
})