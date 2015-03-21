@extends('_master')

@section('title')
	| Add a new event
@stop

@section('content')
	<h4>Add a new event</h4>
	@foreach($errors->all() as $message)
    <div class='error'>{{ $message }}</div>
	@endforeach

	{{ Form::open(array('url' => '/events/create', 'id' => 'validateForm')) }}

		{{ Form::label('title')}}
		{{ Form::text('title') }}
		<br>
		{{ Form::label('location')}}
		{{ Form::text('location') }}
		<br>
		{{ Form::label('date')}}
		<?php $date_entered= Session::get('date_entered'); ?>
		<input type="text" id="validDefaultDatepicker" size="30" name="date" 
		<?php if (isset($date_entered)) echo 'value="' . $date_entered . '"'; ?> >
		<br>

		{{Form::label('time')}}
		{{Form::selectRange('hour', 1, 12)}}
		{{Form::select('minute', array(
			0 => '00', 15 => '15', 30 => '30', 45 => '45'
			)
		)}}
		{{Form::select('m', array(0 => "AM", 1 => "PM"), 0)}}
        <br>
		{{ Form::label('description')}} <br>
		{{ Form::textarea('description', null, ['size' => '30x4']) }}
		<br>
		<span id="charcount"></span>
		<br>
		{{ Form::submit('Submit', array('class' => 'btn btn-default')); }}

	{{ Form::close() }}

@stop

@section('/body')
<script>
  $(function() {
    $("#validDefaultDatepicker").datepicker({dateFormat: 'yy-mm-dd'});
  });
</script>
<script type="text/javascript" src="../js/char_count_desc.js"></script>

@stop