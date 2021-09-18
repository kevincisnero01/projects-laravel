<nav>
	<ul>
		<li class="{{ setActive('home') }}" ><a href="{{ route('home') }}"> @lang('Home') </a></li>
		<li class="{{ setActive('about') }}" ><a href="{{ route('about') }}"> @lang('About') </a></li>
		<li class="{{ setActive('projects.*') }}" ><a href="{{ route('projects.index') }}"> @lang('Projects') </a></li>
		<li class="{{ setActive('contact') }}" ><a href="{{ route('contact') }}"> @lang('Contact') </a></li>
		@auth
			@if(Auth::user()->name == 'admin')
				<li><a href="{{ route('register') }}">Registro de Usuarios</a></li>
			@endif
			<li>
				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar sesion	</a>
			</li>
		@else
			<li><a href="{{ route('login') }}">Login</a></li>
		@endauth
	</ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>