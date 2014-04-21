<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.topbar')
	</header>
	<div id="content">
		@yield('content')
	</div>
	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>
