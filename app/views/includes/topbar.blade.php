<nav>
	<div id="logo">
		<a href="/">STARK</a>
	</div>
	<div id="menu">
		<a href="/projects">Projets</a>
		<a href="/team">Contributeurs</a>
	</div>
</nav>
<div id="login">
	@if(!Auth::check())
		{{ Form::open(array('url' => '/login')) }}
			{{ Form::text('username', null, array('class' => 'login-username', 'placeholder' => 'Nom utilisateur')) }}
			{{ Form::password('password', array('class' => 'login-password', 'placeholder' => 'Password')) }}
			{{ Form::submit('Se connecter', array()) }}
			{{ HTML::link('/register', 'Pas encore de compte ?', array('class' => 'no-account')) }}
		{{ Form::close() }}
	@else
		<span class="hello-user">Bonjour, {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</span> | {{ HTML::link('/logout', 'Se déconnecter', array('class' => 'logout')) }}
	@endif
</div>