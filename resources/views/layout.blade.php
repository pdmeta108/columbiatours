<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.php">
	<title>Travel</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/custom.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="/css/flexslider.css" type="text/css">
	<link rel="stylesheet" href="/css/swipebox.min.css">
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>

	<link rel="stylesheet" type="text/css" href="/css/resetwidget.css">
	<link rel="stylesheet" type="text/css" href="/css/twidgetstyle.css?v_1207">

<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
</head>
@yield('body')
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">

@include('partials.nav')

</header>


<!--aqui va el contenido -->

	<section class="content">

@yield('contenido')

</section>

<!---fin contenido-->

@include('partials.footer')

</div>
<script type='text/javascript' src='/js/jquery.min.js'></script>
<script type='text/javascript' src='/js/jquery.twidget.js?v_1207'></script>
<script type='text/javascript' src='/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/js/vendors.js'></script>
<script type='text/javascript' src='/js/owl.carousel.min.js'></script>
<script type="text/javascript" src="/js/jquery.mb-comingsoon.min.js"></script>
<script type="text/javascript" src="/js/waypoints.min.js"></script>
<script type="text/javascript" src="/js/jquery.counterup.min.js"></script>
<script type='text/javascript' src='/js/theme.js'></script>
<script type='text/javascript' src="/js/jquery.flexslider-min.js"></script>
<script type='text/javascript' src="/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
<script type='text/javascript' src='/js/tabpanel.js'></script>
@yield('scripts')
</body>
</html>
