
@extends('layouts.front')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<!-- Will make a slider in mobile screen  -->

	<section id="gallery">
  <div class="container">
    <div id="image-gallery">
      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/qq.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/qq.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>

        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/ww.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/ww.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/ee.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/ee.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/rr.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/rr.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>

         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/tt.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/tt.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/yy.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/yy.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/uu.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/uu.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
          <div class="img-wrapper">
            <a href="{{ url('design/frontEnd/subernovaSite/home/images/ii.jpg') }}"><img src="{{ url('design/frontEnd/subernovaSite/home/images/ii.jpg') }}" class="img-responsive"></a>
            <div class="img-overlay">
              <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
          </div>
        </div>

      </div><!-- End row -->
    </div><!-- End image gallery -->
  </div><!-- End container -->
</section>


<!-- End Slider -->


<!-- --------------- start our services-------------- -->
	 <section class="introduction">
	 	<div class="blur">
		<div class="container">
				<div class="row">
					<div class="col-md-4 col-12 wow bounceInLeft text-center" data-wow-duration="2s">
						<ul class="list-unstyled">
						  <li class="media">
						    <!-- <img class="mr-3" src="" width="100px" height="100px" style="float: left;margin-right: 10px;"> -->
						    <div class="media-body">
						    	<h1>Super<span>nova</span></h1>
						      <p>We are Engineers have a big interest of technology and
									electronics, gathered to make a SUPERNOVA! (big bang).</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="col-md-4 col-12 wow bounceInUp text-center" data-wow-duration="2s" style="margin-bottom: 35px">
						<ul class="list-unstyled">
						  <li class="media">
						  <!-- span class="eye"> <i class="fas fa-eye fa-5x eye"></i></span> -->
						    <div class="media-body">
						    	<h1>Our Vision</h1>
						      <p>We have a mission and vision about the future. </p>
						    </div>
						  </li>
						</ul>
					</div>

					<div class="col-md-4 wow bounceInRight text-center" data-wow-duration="2s">
						<ul class="list-unstyled">
						  <li class="media">
						   <!--  <img class="mr-3" src="" width="100px" height="100px" style="float: left;margin-right: 10px;"> -->
						    <div class="media-body">
						    	<h1>We have our Descision</h1>
						      <p>Making in general and industrial countries have priority to
									stay and make their own decision, so we decided to make
									our one! .. </p>
						    </div>
						  </li>
						</ul>
					</div>
				</div>
		</div>
	</div>
	</section>
<!--  End Introduction Section -->

<!--  Lanching Section -->
		 <section class="Lanching" style="max-width: 100%">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-12">
						<img class="wow pulse" data-wow-iteration="infinite" src="{{ url('design/frontEnd/subernovaSite/home/images/lanching.png') }}" width="300px" height="400px">

					</div>

					<div class="col-md-6 col-12" style="padding-top: 20px;">
						<h1>Supernova is Launching !</h1>
						<h3>Strategy for the first year</h3>
						<p><span>Vision:</span>
							Technology is humanity future.
							So, we have to prepare and be
							aware of all fields that will
							shape our life.
							</p>

						<p>

							<span>Mission:</span>
							To Build a big community in our
							governorate interested in
							technology fields and make
							social impact by increasing jobs
							market
						</p>
					</div>
				</div>
			</div>
		</section>

<!--  End Section -->


<!-- OurGoals Section -->
	 <section class="ourGoals" style="max-width: 100%">
		<div class="blur">
			<div class="container">
				<div class="row">
					 <h1 class="text-center wow bounceInDown" data-wow-duration="2s" >SuperNova Goals</h1>
					<div class="col-md-6 col-12 left wow bounceInUp" data-wow-duration="2s" >
						<p>- Improve knowledge about technology in Egypt.</p>

						<p>- Be a pioneer technical services company.</p>

						<p>- Support projects that develop fields like :
							<ul>
								<div class="row">
									<div class="col-md-4 ">
										<li> Clean Energy</li>
										<li> Robots services </li>
									</div>
									<div class="col-md-4">
										<li> Design</li>
										<li> Education</li>
									</div>
								</div>
							</ul>


						</p>
					</div>
					<div class="col-md-6 col-12 right wow bounceInUp" data-wow-duration="2s">

						<p>- Convert to a transaction center between theoretical and
								practical <span style="margin-left: 15px;">knowledge  </span> .
								</p>
						<p>- Become a donor of scientific teams in international
								competitions.</p>

					</div>
				</div>

			</div>
		</div>

	</section>
<!-- End Our goals Section -->

<!-- Our Services Section -->
	  <section class="ourServices" style="max-width: 100%">
		<div class="container">
			<h1 class="text-center">SuperNova Services</h1>

			<div class="row text-center"  style="margin-top: 80px;">

				<div class="col-md-3 col-12" style="margin-bottom: 20px">
					<img src="{{ url('design/frontEnd/subernovaSite/home/images/makerspace.png') }}" alt="makerspace" width="60px">
					<h1><a href="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/makerSpace.htm') }}l">Makerspace</a></h1>
					<p>To make any project or test any product before publishing. Supplied with
							many tools
					</p>
				</div>
				<div class="col-md-3 col-12" style="margin-bottom: 20px">
					<img src="{{ url('design/frontEnd/subernovaSite/home/images/store.png') }}" alt="store" width="60px">
					 <h1><a href="{{ url('design/frontEnd/subernovaSite/store/store.html') }}">Electronic Store</a></h1>
					<p>Provide materials
						and required parts
						and tools for
						customers.
					</p>
				</div>
				<div class="col-md-3 col-12" style="margin-bottom: 20px">
					<img src="{{ url('design/frontEnd/subernovaSite/home/images/courses.png') }}" alt="courses" width="60px">
					<h1><a href="{{ url('design/frontEnd/subernovaSite/courses/courses.html') }}">Courses</a></h1>
					<p>For beginners in
						practical method
						“doing by learning”
					</p>
				</div>
				<div class="col-md-3 col-12" style="margin-bottom: 20px">
					<img src="{{ url('design/frontEnd/subernovaSite/home/images/training.png') }}" alt="training" width="60px">
					<h1>Training</h1>
					<p>For students
						and graduated
						with good
						background.
					</p>
				</div>

			</div>

		</div>
	</section>
<!-- End Our Services Section -->



@endsection
