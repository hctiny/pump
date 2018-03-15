(function($){
	$.fn.draw = function(){
		console.log('initDraw');
		$(this).bind('click', function(){
			if($(this).hasClass('draw')){
				$(this).removeClass('draw');
			}else{
				$(this).addClass('draw');
			}
		});
	}
})(jQuery)