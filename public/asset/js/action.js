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
})




$('#videoLink')
.magnificPopup({
	  type:'inline',
	  midClick: true 	// Allow opening popup on middle mouse click.
	   					//Always set it to true if you don't provide alternative source in href.
  })


/*Galary js*/
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);


var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

$overlay.hide();

$(".img-overlay").click(function(event) {
  event.preventDefault();
  var imageLocation = $(this).prev().attr("href");
  $image.attr("src", imageLocation);
  $overlay.fadeIn("slow");
});
$overlay.click(function() {
  $(this).fadeOut("slow");
});

$nextButton.click(function(event) {
  $("#overlay img").hide();
  var $currentImgSrc = $("#overlay img").attr("src");
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  var $images = $("#image-gallery img");
  if ($nextImg.length > 0) { 
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  event.stopPropagation();
});

$prevButton.click(function(event) {
  $("#overlay img").hide();
  var $currentImgSrc = $("#overlay img").attr("src");
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  event.stopPropagation();
});

$exitButton.click(function() {
  $("#overlay").fadeOut("slow");
});


$("html").niceScroll();

$("body").niceScroll({
  cursorcolor:"blue",
  cursorwidth:"6px"
});

/*End Galary js*/

//loading overlay section

$(window).load(function(){
	//show the scroll
	
	$(".load-overlay").fadeOut(6000);
  $("body").css("overflow" , "auto");



});