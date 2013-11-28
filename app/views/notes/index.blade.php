@extends("template")

@section("content")
<div class="jumbotron text-left">

Sort by: 
<select>
	<option value = "date">Date</option>
	<option value = "course">Course</option>
</select>


    @foreach($notes as $n)
	<!-- assigns unique class so each document can toggle individually -->
	<div class="row" onclick ="toggleDetails('div.{{$n->id}}')">
		<h2>{{$n->fileName}} </h2>
			<div class = "{{$n->id}}" style="display:none;">
			Course: {{$n->class}}<br>
			Submitted by {{$n->authorName}} on {{date("l F jS g:i A",$n->date)}}<br>
			<a  href="/notes/{{$n->id}}">Download</a>
			</div>
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
