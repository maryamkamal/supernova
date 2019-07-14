$(document).ready(function(){
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if(scroll>600){
			$("#nav").css("background-color" , "#00305A");
			$("#links").css("background-color" , "#183e4cb8");

		}else{
			$("#nav").css("background-color" , "transparent");
			$("#links").css("background-color" , "transparent");
		}
	})
})

$("html").niceScroll();

$("body").niceScroll({
  cursorcolor:"blue",
  cursorwidth:"6px"
});
