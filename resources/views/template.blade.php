<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>pmwebview.app</title>
	<link href="{{ asset ('bootstrap_3.3.6/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset ('css/style.css') }}" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="{{ asset ('js/html5shiv_3_7_2.min.js') }}"></script>
	<script src="{{ asset ('js/respond_1_4_2.respond.min.js') }}"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		@include('navbar')
		@yield('main')
	</div>

		@yield('footer')

	<script src="{{ asset ('js/jquery_2_2_1.min.js') }}"></script>
	<script src="{{ asset ('bootstrap_3.3.6/dist/js/bootstrap.min.js') }}"></script>	
</body>
</html>