<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','App')</title>
	<style type="text/css">
		.active a{
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials.nav')
	@include('partials.session-messages')
	@yield('content')
</body>
</html>	