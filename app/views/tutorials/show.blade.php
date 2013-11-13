@extends("template")

@section("content")
<div class="jumbotron">
<h1>{{$tut->name}}</h1>
<h2>{{$date}}</h2>
<h2>By {{$tut->host}}</h2>
<h2>Description:</h2>
{{$tut->description}}
<h2>Things to Bring</h2>
<ol>
@foreach(explode(",",$tut->equipment) as $item)
<li>{{$item}}</li>
@endforeach
</ol>
</div>
@stop



