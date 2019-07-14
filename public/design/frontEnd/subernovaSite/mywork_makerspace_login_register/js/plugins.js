$(document).ready(function(){
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if(scroll>600){
			$("#nav").css("background-color" , "#0e3053");
			$("#links").css("background-color" , "#183e4cb8");

		}else{
			$("#nav").css("background-color" , "transparent");
			$("#links").css("background-color" , "transparent");
		}
	})
});


$(window).load(function(){
	//show the scroll
	$(".load-overlay").fadeOut(6000);
	$("body").css("overflow" , "auto");

});


$("html").niceScroll();

$("html").niceScroll({
  cursorcolor:"blue",
  cursorwidth:"16px"
});

//make the links scroll smoothly
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
