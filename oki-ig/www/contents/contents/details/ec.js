jQuery.noConflict();

jQuery(document).ready(function($){

	var i=0;
	while (i<=10)
	{
		$("#myExtraContent"+i).appendTo("#extraContainer"+i);
		i=i+1;
	}
});

(jQuery);