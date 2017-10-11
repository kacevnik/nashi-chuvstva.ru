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

	colorMenu();

});