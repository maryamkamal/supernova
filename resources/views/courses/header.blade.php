
<!DOCTYPE html>
<html>
<head>

@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
		@endif
		
	<title>Courses home</title>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<!-- for mobile first -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{ url('design/frontEnd/subernovaSite/photos/logo.png') }}">


	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/bootstrap.css') }}">
	
	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/contact/css/contact.css') }}">



	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/courses/css/course.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/courses/css/web-desine.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/all.min.css') }}">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
			rel="stylesheet">


</head>
