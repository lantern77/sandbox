@extends("template")
@section("content")
<!--By Arka Ganguli-->

<div class="jumbotron">
	<h3>Check out the tutors available below. E-mail them with your Mac e-mail to get in touch!</h3>
	<div class="jumbotron text-center">
			@foreach($tutors as $t)
				<div class = "row">
					<h3><a href = "/tutors/{{$t->id}}">{{$t -> firstname}} {{$t -> lastname}}</a></h2>
					Tutor for: SE {{$t -> course}}
				</div>
			@endforeach
	</div>

    <h3>Are you good at a certain course, and enjoy teaching?</h3>
    <h2><a href = "/tutors/create">Apply to be a tutor today!</a></h2>

</div>
@stop

