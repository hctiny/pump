(function($){
    $.fn.uploadImage = function(name, amount){
        var addTemp = '<div><img src="../img/img_plus.png"><input type="file" id="new-image"></div>';
        var uploadedTemp = '<img src="$imageUrl"><input type="hidden" name="$name" />';

        if(amount < 1){
            return false;
        }else if(amount > 1){

        }else{

        }
    }
})(jQuery);