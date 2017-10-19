jQuery(document).ready(function ($) {		
	function colorMenu(){
		var color_menu = ['#D46026', '#8DC63F', '#00AEEF', '#FF9900', '#8E44AD', '#C0392B'];
		var i = 0;
		$('ul.primary-navigation .sub-menu li span').remove();
		$('ul.primary-navigation li span').each(function(index, el) {
			$(this).css({'background-color': color_menu[i]});
			i++;
		});
	}	

	function colorBackTitle(){
		var color_menu = ['#D46026', '#8DC63F', '#00AEEF', '#FF9900', '#8E44AD', '#C0392B'];
		var i = 0;
		$('.category-title').each(function(index, el) {
			$(this).css({'background-color': color_menu[i]});
			i++;
		});
	}

	//Плавная прокрутка
  	$("a[href*='#']").bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 500);
		e.preventDefault();
		return false;
	});

	colorMenu();
	colorBackTitle();

});