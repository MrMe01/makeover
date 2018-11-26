$(document).ready(function(){
    
    var items = $('.carousel').find('.product-card');
    for(var i = 0; i < items.length; i++) {
        $(items[i]).hover(function(){
            $(this).addClass('animate');			
		 }, function(){
			$(this).removeClass('animate');
        });  
    }
    console.log(items);
    		
});

