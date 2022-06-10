<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords"
		content="BlueBees, BlueBees Ltd., Knittersland, BlueBees AI, Trux24, Xirooms, Nilam.xyz, BlueBees4U, BlueBees XYZ">
	<meta name="description"
		content="BlueBees Limited is one of the few names whose core focus is to have a complete technology driven business echo system in the reach of every entrepreneur.">
	<meta name="author" content="BlueBees Limited">
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}"
		type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<link rel="stylesheet"
		href="{{ asset('css/fontawesome-free-5.15.4-web/css/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css"
		href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<link rel="stylesheet" media="all"
		href="{{ asset('css/full_width_animated_layers_003.css') }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap"
		rel="stylesheet">
	{{-- Slick for using in Blog section. --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}" />
</head>

<body>
	@include('components.navbar')

	@yield('content')

	@include('components.footer')

	</footer>
	<!-- Footer Section End -->
	<!-- Go To Top Link -->
	<a href="#" class="back-to-top">
		<i class="fa fa-arrow-up"></i>
	</a>

	<script src="https://kit.fontawesome.com/124408ca8b.js" crossorigin="anonymous">
	</script>
	<script
	 src="{{ asset('css\fontawesome-free-5.15.4-web\js\fontawesome.min.js') }}"
	 crossorigin="anonymous"></script>
	<script src="js/jquery-min.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/paradise_slider_min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/smooth-scroll.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	{{-- Slick for using in Blog section. --}}
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js">
	</script>
	<script type="text/javascript"
		src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
