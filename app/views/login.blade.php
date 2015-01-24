@extends('_master')

@section('title')
	| Log In
@stop

@section('content')
<div class="row">
	<h4>Log in</h4>

	{{ Form::open(array('url' => '/login')) }}

	    {{ Form::label('username') }}
	    {{ Form::text('username') }}<br><br>

	    {{ Form::label('password') }}
	    {{ Form::password('password') }}<br><br>

	    {{ Form::submit('Submit', array('class' => 'btn btn-default')); }}

	{{ Form::close() }}

	<p id="password-remind">
		<a href="/password/remind">Did you forget your password?</a>
	</p>
</div>
@stop