@extends("template")

@section("content")
<div class="jumbotron text-center">
    @foreach($notes as $n)
    <div class="row">
        <h2><a href="/notes/{{$n->id}}">{{$n->fileName}}</a></h2>
        {{$n->authorName}}
    </div>
    @endforeach
<h2><a href = "/notes/upload"> upload a file</a><h2>
</div>
@stop