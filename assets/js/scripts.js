


jQuery(document).ready(function() {
	
	/*
	    Navigation
	*/	
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), 0);
	});
	
    /*
        Background slideshow
    */
    $('.top-content').backstretch("assets/img/BG.jpg");
    $('.testimonials-container').backstretch("assets/img/BG.jpg");
    
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(){
    	$('.testimonials-container').backstretch("resize");
    });
    
	
});

