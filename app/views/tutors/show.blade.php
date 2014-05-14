@extends ("template")
@section ("content")
<!--By Arka Ganguli-->

<div class = "jumbotron">
	<h1>{{$tutor->firstname}} {{$tutor->lastname}}</h1>
	<h2>Tutor For: SE {{$tutor->course}}</h2>
	<h2>Email: {{$tutor -> email}}</h2>
	<h2>Description: {{$tutor -> description}}</h2>
</div>
@stop