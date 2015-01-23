<h1>There is a new event in Dorisdays!</h1>

<label>Where:</label> {{ $event['location'] }} <br>
<label>When:</label> <?php $date = date_create($event['when']); ?>
{{ date_format($date, 'l m/d/Y g:i A') }}<br>
<label>What:</label> {{ $event['description'] }}

<p>
	View the event and comment <a href="http://dorisdays.beckrecca.me/events/view/{{$event['id']}}">here</a>!
</p>