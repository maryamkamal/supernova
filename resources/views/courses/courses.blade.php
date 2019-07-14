@extends('layouts.courses')

@section('content')
 
    
<!-- Start Courses Section -->

<div id="event-lineup" style="padding: 40px 0 84px 0;">

  	<div class="event-lineup-box">

  		<ul>
             @foreach ($courses as $course)
    		<li class="box">
      			<a href="{{ url('course_details/'.$course->id) }}" target=_blank>
	      			<img alt="Web" src="{{ url($course->imgpath) }}">
	      			<h3></h3>
	      			<div class="designe">

	        			<p class=description>
						{{$course->description}}
	        			</p>
	        			<p>{{$course->price}}.LE</p>
	      			</div>
      			</a>
   			</li>
             @endforeach
			</ul>

   	</div>
</div>

    <!-- End Courses Section -->

@endsection