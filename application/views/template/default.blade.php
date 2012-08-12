<!DOCTYPE HTML>

<head>

	<title>@yield('title')</title>
	<meta name="keywords" content="Manthan, e-magazine, IISER Mohali">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
<!-- Google Fonts -->
	
	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

	<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::base()."/" }}style.css">
	<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::base()."/" }}menu/css/simple_menu.css">
	<link rel="stylesheet" href="{{ URL::base()."/" }}css/prettyPhoto.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="{{ URL::base()."/" }}css/nivo-slider.css" type="text/css" media="screen"/>

<!-- JS Files -->

	<script type="text/javascript" src="{{ URL::base()."/" }}js/jquery.min.js"></script>
	
	<script type="text/javascript" src="{{ URL::base()."/" }}js/custom.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/slides/slides.min.jquery.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/cycle-slider/cycle.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/nivo-slider/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/tabify/jquery.tabify.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/scrolltop/scrolltopcontrol.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/portfolio/filterable.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/modernizr/modernizr-2.0.3.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
	<script type="text/javascript" src="{{ URL::base()."/" }}js/swfobject/swfobject.js"></script>
	<!-- FancyBox -->
	<link rel="stylesheet" type="text/css" href="{{ URL::base()."/" }}js/fancybox/jquery.fancybox.css" media="all">
	<script type="text/javascript" src="{{ URL::base()."/" }}js/fancybox/jquery.fancybox-1.2.1.js"></script>

</head>

<body>

	<?php require path('app')."/views/required/menu.php"; ?>
	
	<div id="container">
	
		<div id="site_title"><a href="index.php"><strong>e-Manthan</strong> Logo</a></div>

		@yield('body')

		<div style="clear:both; height: 40px"></div>

	</div>

	<?php require path('app')."/views/required/foot.php"; ?>
	
</body>