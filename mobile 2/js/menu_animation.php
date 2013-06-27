<script>

$(document).ready(function(){
                
                
                // Close/Open Navigation
               var myheight = $(document).height();
                
				$(".mobile-nav").on("click",function(e){
                    e.preventDefault();
					
					 var width = ($(window).width())*0.80;
           			
				
                    $(this).toggleClass('open-nav');
                    
                    if($(this).hasClass('open-nav')){
                        
                        $("#animated").animate({
                            left: width
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: width
                        }, { duration: 240, queue: false });
						
						
                    }
                    else {
                        $("#animated").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: 0
                        }, { duration: 240, queue: false });
                    }
					$("#leftmenu").css({"height":myheight,
										"width":width});
 
                });
            });
			
			
$(document).ready(function(e) {
	
	var myheight = $(document).height();
	var mywidth = $(document).width();
	$('#animated').css({"width":mywidth});
    var newheight = myheight - 51;
	$('#wrapper').css({"height":newheight});
	
	$("#leftmenu").css({"height":0});
	$('#wrappers').css({"height":newheight});
	myScrolls.refresh();
	
	
});

$(window).resize(function() {
	
	 // Close/Open Navigation
                var width = ($(window).width())*0.80;
           		
              
                        $("#animated").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: 0
                        }, { duration: 240, queue: false });
                  
    
			
			
			
	var myheight = $(window).height();	
	var mywidth = $(window).width();

	$('#animated').css({"width":mywidth});
	
    var newheight = myheight;
	$('#wrapper').css({"height":newheight});
	
	$("#leftmenu").css({"height":newheight,
	"width":width});
	$('#wrappers').css({"height":newheight});
	myScrolls.refresh();
	
	
});

</script>


<script src="js/quo.js"></script>
<script src="js/quo.debug.js"></script>
    
<script>
$$('#animated').swipeLeft(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: 0
	}, { duration: 240, queue: false });
});


$$('#animated').swipeRight(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: width
	}, { duration: 240, queue: false });
});

$$('#wrapper').swipeLeft(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#leftmenu").css({"height":0,
						"width":width});
	
	myScrolls.refresh();
});


$$('#wrapper').swipeRight(function() {
    // affects "span" children/grandchildren
	
	var myheight = $(document).height();
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: width
	}, { duration: 240, queue: false });
	
	$("#leftmenu").css({"height":myheight,
						"width":width});
	
	myScrolls.refresh();
});


</script>  