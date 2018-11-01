<!DOCTYPE html>
<html lang="sr">
<head>
	<title>CV Zoran Glumac</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV biografija">
	<meta name="keywords" content="biografija, civic, cv, php programer,php developer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	{!! HTML::style('css/bootstrap.min.css') !!}
	{!! HTML::style('css/font-awesome.min.css') !!}
	{!! HTML::style('css/flaticon.css') !!}
	{!! HTML::style('css/owl.carousel.css') !!}
	{!! HTML::style('css/magnific-popup.css') !!}
	{!! HTML::style('css/style.css') !!}
    
    {!! HTML::script('https://www.google.com/recaptcha/api.js') !!}
	<!--<script src='https://www.google.com/recaptcha/api.js'></script> -->
	

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	@yield('content')

	<!-- Footer section start -->
	<footer class="footer-section">
		<div class="container text-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sva prava zadržana | Korišćen tamplate od <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	{!! HTML::script('js/jquery-2.1.4.min.js') !!}
	{!! HTML::script('js/bootstrap.min.js') !!}
	{!! HTML::script('js/owl.carousel.min.js') !!}
	{!! HTML::script('js/magnific-popup.min.js') !!}
	{!! HTML::script('js/circle-progress.min.js') !!}
	{!! HTML::script('js/main.js') !!}
	
</body>
</html>	