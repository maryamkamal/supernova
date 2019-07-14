
 

<body>

<!-- ----------------starrt header ------------------------ -->
 <header class="header">
 	<div id="particles-js"></div>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
	  <div class="container">
		 <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header navbar-left">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand " href="/">Supernova</a>
	    </div>
	    <!-- Collect the nav links, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar-right" id="navbar">
	      <ul class="nav navbar-nav" >
	        <li class="active"><a href="/">Home<span class="sr-only">(current)</span></a></li>
	        <li><a href="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/about.html') }}">About</a></li>
	        <li><a href="/makerspace">Maker Space</a></li>
	        <li><a href="/courses"> Courses</a></li>
	        <li><a href="{{ route('store') }}">Electronic Store</a></li>
	      </ul>

	    </div>
      </div>
  </nav>


<div class="row text-center  button-body ">
	<div class="container">
		<div class="col-md-12 ">
  			<div class="content" style="margin-left: 28px">
				<a href="#videoStory" class="button more" id="videoLink">
					<i class="fa fa-play-circle" ></i>
					Watch Video
				</a>

				<div class="col-md-12 col-12">
				<div id="videoStory" class="mfp-hide" style="max-width: 75%; margin: 0 auto;">
				 <video src="{{ url('design/frontEnd/subernovaSite/images/work.mp4') }}"
				 		frameborder="0" allowfullscreen controls width="100%"></video>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

</header>
<!------------------------------------------------ -->
