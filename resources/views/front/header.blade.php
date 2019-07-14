
<!DOCTYPE html>
	<html>
		<head>
		@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
		@endif
			<title>SuperNova</title>

			<meta charset="utf-8">
			<!-- for internet explorer -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<!-- for mobile first -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">


			<link rel="icon" href="{{ url('design/frontEnd/subernovaSite/home/images/logo.png') }}">

			<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/bootstrap.css') }}">
			<!-- <link rel="stylesheet" type="text/css" href="css/home.css"> -->
			<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/home/css/home.css') }}">
			
			<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/contact/css/contact.css') }}">

			<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/css/ninja-slider.css') }}">

			<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/all.min.css') }}">
			<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/animate.min.css') }}">

         <link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/css/animat.css') }}">

			<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/home/css/magnific-popup.css') }}">

             <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

			<!-- to make internet explorer suport html5 -->
			<script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/home/js/html5shiv.min.js') }}"></script>
			<!-- to make internet explorer suport media query -->
			<script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/home/js/respond.min.js') }}"></script>
		</head>
<!-- {{ url('design/frontEnd/subernovaSite/') }} -->


  

 
    
    

