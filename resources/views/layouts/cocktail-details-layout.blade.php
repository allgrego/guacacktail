<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		
    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
        <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
        @yield('head')
        <title>Guacacktail</title>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="/" class="logo"><strong>Guacacktail</strong> | Cocktail {{$cocktail['strDrink']}}</a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>


				<!-- Menu -->
					<nav id="menu">
                        <ul class="actions stacked">
							<li><a href="/" class="button primary fit">Home</a></li>
                            <li><a href="/cocktails/rum" class="button fit">Rum Cocktails</a></li>
                            <li><a href="/cocktails/vodka" class="button fit">Vodka Cocktails</a></li>
                            <li><a href="/cocktails/beer" class="button fit">Beer Cocktails</a></li>
                            <li><a href="/cocktails/wine" class="button fit">Wine Cocktails</a></li>
                            <li><a href="/cocktails/tequila" class="button fit">Tequila Cocktails</a></li>
                            <li><a href="/cocktails/gin" class="button fit">Gin Cocktails</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

@yield('content')
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://twitter.com/allgrego" target="_blank" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.instagram.com/allvrzgreg/"  target="_blank" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/allgrego" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="https://www.linkedin.com/in/gregorio-alvarez-martinez-6a561a124/" target="_blank" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
                                <li>&copy; Guacacktail</li><li>Made by: <a href="https://github.com/allgrego" target="_blank">allgrego</a> - Based on <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
            <script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('js/browser.min.js')}}"></script>
			<script src="{{asset('js/breakpoints.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>