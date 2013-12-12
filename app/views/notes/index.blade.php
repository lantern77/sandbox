@extends("template")

@section("content")
<div class="jumbotron text-left">


	@foreach($array as $course)

	<h2 onclick="toggleDetails('div.{{$course[0]->course}}')">{{$course[0]->course}} </h2><!-- course heading -->
	<div class="{{$course[0]->course}}"style="display:none;"> <!-- class = course name for toggling -->
	   @foreach($course as $n)
	<!-- assigns unique class so each document can toggle individually -->
	<div class="note" onclick ="toggleDetails('div.{{$n->id}}')" >
		{{$n->fileName}}
			<div class = "{{$n->id}}" style="display:none;">
				--->Submitted by {{$n->authorName}} on {{date("l F jS g:i A",$n->date)}}<br>
				---><a  href="/notes/{{$n->id}}">Download</a>
			</div>
	</div>
	@endforeach
	
	
	</div>
	
	
	@endforeach
	
 
	
</div>
<div align = "center">
<h2><a href = "/notes/create"> upload a file</a><h2>
</div>




@stop

<script>
function toggleDetails(item) {
$(item).toggle();
}
</script>
