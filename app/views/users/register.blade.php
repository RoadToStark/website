@extends('layouts.default')

@section('content')

{{ Form::open(array('url'=>'/register', 'id'=>'form-signup')) }}
    <h1 class="title">Enregistrement</h1>
	   <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    
	{{ Form::text('username', null, array('class'=>'user-form', 'placeholder'=>'Nom d\'utilisateur')) }}
    {{ Form::text('firstname', null, array('class'=>'user-form', 'placeholder'=>'Prénom')) }}
    {{ Form::text('lastname', null, array('class'=>'user-form', 'placeholder'=>'Nom')) }}
    {{ Form::email('email', null, array('class'=>'user-form', 'placeholder'=>'Adresse mail')) }}
    <div class="user-passwords">
    	{{ Form::password('password', array('class'=>'user-form-password', 'placeholder'=>'Mot de passe')) }}
		{{ Form::password('password_confirmation', array('class'=>'user-form-password', 'placeholder'=>'Confirmation mot de passe')) }}
    </div>
    
    {{ Form::text('description', null, array('class'=>'user-form-description', 'placeholder'=>'A propos de vous...')) }}
    {{ Form::submit('Register', array('class'=>'submit-user'))}}
    
{{ Form::close() }}

@stop