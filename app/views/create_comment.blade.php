@extends('_master')

@section('title')
	| Comment on this event
@stop

@section('content')

	<div class="col-sm-6">
		<div class="event">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="title">
						<a href="/events/view/{{$event['id']}}">{{ $event['title'] }}</a><br>
					</div>
					@if ($user == $event['user_id'])
						<div class="x">
							<a href="/events/edit/{{$event['id']}}">Edit</a> |
							<a href="/events/delete/{{$event['id']}}">Delete</a> 
						</div>
					@endif
				</div>
				<div class="panel-body">
					<label>Created by:</label> {{ $username }} <br>
					<label>Where:</label> {{ $event['location'] }} <br>
					<label>When:</label> <?php $date = date_create($event['when']); ?>
					{{ date_format($date, 'l m/d/Y g:i A') }}<br>
					<label>What:</label> {{ $event['description'] }}<br>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6">

		 <h4>Comment on this event</h4>

		 @foreach($errors->all() as $message)
	    <div class='error'>{{ $message }}</div>
		@endforeach

		{{ Form::open(array('url' => '/comments')) }}

			{{ Form::label('text' )}} (Limit 160 characters) <br>
			{{ Form::textarea('text', null, ['size' => '30x4']) }}
			<br><span id="charcount"></span>

			<input type="hidden" name="holiday_id" value="{{ $event['id'] }}" />

			<br>
			{{ Form::submit('Submit', array('class' => 'btn btn-default')); }}

		{{ Form::close() }}

		<h4>Comments</h4>

		@foreach ($comments as $comment)
			<div class="row">
				<div class="comment">
					<div class="panel panel-default">
						<div class="panel-body">
						{{ $comment['text'] }}
						</div>
						<div class="panel-footer">
							by {{ $users[$comment['id']] }} 
							at <?php $comment_timestamp = date_create($comment['created_at']); ?>
							{{ date_format($comment_timestamp, 'm/d/Y g:i A') }}
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@stop

@section('/body')
<script type="text/javascript" src="../js/char_count_comment.js"></script>

@stop