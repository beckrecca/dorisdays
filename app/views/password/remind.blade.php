@extends('_master')

@section('title')
	| Password Help
@stop

@section('content')
<h3>Forget your password?</h3>

<p>Submit your email, and you will be sent a link to reset it.</p>

{{ Form::open(array('action' => 'RemindersController@postRemind')) }}
 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 
  <p>{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}</p>
 
{{ Form::close() }}
@stop