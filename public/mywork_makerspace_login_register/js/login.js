$(window).load(function(){
	//show the scroll

	$(".load-overlay").fadeOut(6000);
	$("body").css("overflow" , "auto");

});

// for nice scroll plugin
$("html").niceScroll();

$("body").niceScroll({
  cursorcolor:"blue",
  cursorwidth:"6px"
});

// function to show password
function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
