<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','App')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ===== APLICACION ===== -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js" defer></script>

	<!-- ===== PLUGINS ===== -->
	<link rel="stylesheet" type="text/css" href="/plugins/bootstrap-4.6.0/css/bootstrap.css">
	<script type="text/javascript" src="/plugins/jquery-3.3.1/jquery.js" defer></script>
	<script type="text/javascript" src="/plugins/bootstrap-4.6.0/js/bootstrap.js" defer></script>

</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-messages')
		</header>

		<main>
			@yield('content')
		</main>

		<footer class="bg-white text-center text-black-50 py-3 shadows">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
	</div>
</body>
</html>	