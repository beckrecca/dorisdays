@extends('_master')

@section('title')
	| Password Reset
@stop

@section('content')

{{ Form::open(array('action' => 'RemindersController@postReset')) }}
 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 
  <p>{{ Form::label('password', 'New password') }}
  {{ Form::password('password') }}</p>
 
  <p>{{ Form::label('password_confirmation', 'Confirm new password') }}
  {{ Form::password('password_confirmation') }}</p>
 
  {{ Form::hidden('token', $token) }}
 
  <p>{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}</p>
 
{{ Form::close() }}
@stop