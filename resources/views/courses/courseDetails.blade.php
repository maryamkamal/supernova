@include('courses.header')
@include('courses.courseDescriptionNav')

<!-- Start Course Description -->

 <div class="container">
                        <div class="row">
                           <div class="col-md-8 col-12" id="description">
						   {{ $course->full_description }}
                           </div>

                           <div class="col-md-4 col-12 text-center" id="description2">
                                 <h2>{{ $course->price }} LE</h2> &nbsp;
                                 <br>
                                 <button class="btn btn-danger enroll"data-toggle="modal"  data-target="#enrollCourse">
                                                                     Enroll Now</button>
                           </div>
                        </div>
                  </div>
            </section>
<!-- End Course Description -->


<!-- Sectionn Learning -->
<section class="what-you-get">
           <div class="container">
              <h1>What Will you learn</h1>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="media">

				<!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
	                             <div class="media-body">
                                          Real-world skills to build
                                           real-world websites: professional,
                                           beautiful and truly responsive websites
		                     	 </div>
                              </div>

                        <div class="media">

               <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
                           <div class="media-body">
                                Learn super cool jQuery effects like animations, 
                                scroll effects and "sticky" navigation
                                 </div>
                        </div>

                        <div class="media">

               <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
                             <div class="media-body">
                              Get helpful support in the course Q&A
                              </div>
                         </div>

                         </div>

                         <div class="col-md-6 ">

<div class="media">

<!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
<div class="media-body">
A huge project that will teach you everything you need to know to get started with HTML5 and CSS3

</div>
</div>

<div class="media">

<!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
<div class="media-body">
Simple-to-use web design guidelines and tips to make your website stand out from the crowd
</div>
</div>

<div class="media">

<!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
<div class="media-body">
Get my e-book "Best Resources for Web Design and Development with HTML5 & CSS3" for free
    </div>
    </div>

    </div>
    </div>
    </div>
</section>

<!-- End Section -->

<!-- Start Section Requirments -->
    <section class="requirments">
    <div class="container">
    <h2>Requirments</h2>
    <ul>
    {{ $course->requirments }}
    </ul>
    </div>
    </section>
<!-- End Requirments Section -->

    <!-- Start about Aythor Section -->
        <section class="about-author">
        <div class="container">
        <h2 class="text-center">About the Instructor</h2>
        <div class="row">
        <div class="col-md-12 col-12">
        <div class="media">
        <img class="mr-5" src="#"  alt="Generic placeholder image">
    </div>
</div>

<div class="col-md-6 col-12">
<h5 class="mt-0">{{ $course->instructor_name }}</h5>
<h6>{{ $course->instructor_title }} </h6>
<p>
{{ $course->instructor_description }}
</p>
</div>

<div class="col-md-12 col-12 desc">
<i class="fas fa-user-check"></i>&nbsp;
				<span>
                <span style="font-weight: bold">425,185</span>
                     Students
</span><br><br>

<i class="fas fa-play-circle"></i>&nbsp;
				<span>
           <span style="font-weight: bold">4</span>
			Courses
</span>

<ul class="list-unstyled">
    
      <li><a href="">
          <i class="fab fa-facebook fa-2x"></i>
      </a>
           <li><a href="">
            <i class="fab fa-instagram fa-2x"></i>
           </a>
            </li>
            <li><a href="">

            <i class="fab fa-twitter fa-2x"></i></a> </li>

   </ul>

</div>

</div>
</div>
</section>
<!-- End Section -->


@include('courses.footer')