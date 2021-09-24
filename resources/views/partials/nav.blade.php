<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm ">
	<div class="container">

		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name') }}
		</a>

		<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}"
		> <span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills nav-brand mr-auto">
				<li class="nav-item" >
					<a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}" > @lang('Home') </a>
				</li>
				<li class="nav-item" >
					<a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}"> @lang('About') </a>
				</li>
				<li class="nav-item" >
					<a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}"> @lang('Projects') </a>
				</li>
				<li class="nav-item" >
					<a class="nav-link {{ setActive('contact') }} "href="{{ route('contact') }}"> @lang('Contact') </a>
				</li>
			</ul>

			<ul class="nav navbar-nav">
				@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
					</li>
				@endguest
				@auth
				<li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="rounded-circle mr-2" src="/img/profile.png" width="30" height="30" alt="profile">
						{{ Auth::user()->name}}
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">

						<a class="dropdown-item" href="#">Perfil</a>
						
						<a class="dropdown-item" href="{{  route('users.index') }}">Usuarios</a>

						<div class="dropdown-divider"></div>

						<a class="dropdown-item" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar sesion	</a>

					</div>	
				</li>
				@endauth
			</ul>
		</div><!--#navbarSupportedContent-->

	</div><!--container-->
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	@csrf
</form>