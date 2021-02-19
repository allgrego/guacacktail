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
		<link rel="stylesheet" href="{{asset('css/app.css')}}" />      
        @yield('title')
		@yield('style')
	</head>
	<body class="" @yield('body_attributes')>

		{{-- Wrapper --}}
			<div id="wrapper">

				@yield('macrontent')
				 {{-- Footer --}} 
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

		{{-- Scripts  --}}
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('js/browser.min.js')}}"></script>
			<script src="{{asset('js/breakpoints.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
			@yield('scripts')

	</body>
</html>

{{-- <!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/app.css')}}" />
        @yield('head')
        <title>Guacacktail</title>
	</head>
	<body class="">

		<!-- Wrapper -->
			<div id="wrapper">

				

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
</html> --}}