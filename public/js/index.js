$('.departments-toggle').click(function(){
	$('.departments-menu').toggleClass('is-hidden-mobile');
});

$('.departments-toggle>img').click(function(){
	$('.departments-toggle>img').toggleClass('hide')
});

    $('.collapsible').collapsible();
