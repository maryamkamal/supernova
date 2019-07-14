
<!DOCTYPE html>
<html>
<head>
@if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
		@endif
	<title>Store</title>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<!-- for mobile first -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="{{ url('design/frontEnd/subernovaSite/store/photos/logo.png') }}">

	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/all/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/store/css/store.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/store/css/add.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('design/frontEnd/subernovaSite/contact/css/contact.css') }}">


	
</head>
