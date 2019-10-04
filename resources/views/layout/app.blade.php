<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <style type="text/css">
    	body
    	{
    		background-color:#000d1a;
    	}
    </style>
</head>
<body>
	<div>
	@yield('header')
	</div>
	<div class="container">
		@yield('content')
	</div>
	<div>
	@yield('footer')
	</div>
</body>
</html>