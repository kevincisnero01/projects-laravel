<nav>
	<ul>
		<li class="{{ setActive('home') }}" ><a href="{{ route('home') }}"> @lang('Home') </a></li>
		<li class="{{ setActive('about') }}" ><a href="{{ route('about') }}"> @lang('About') </a></li>
		<li class="{{ setActive('portfolio') }}" ><a href="{{ route('portfolio') }}"> @lang('Portfolio') </a></li>
		<li class="{{ setActive('contact') }}" ><a href="{{ route('contact') }}"> @lang('Contact') </a></li>
	</ul>
</nav>