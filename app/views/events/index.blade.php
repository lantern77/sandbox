@extends('template')

@section('content')
<div class="jumbotron text-center">
    @foreach($events as $e)
    <div class="row">
        <h2><a href="/tutorials/{{$e->id}}">{{$e->name}}</a></h2>
        {{$e->brief_intro}}
    </div>
    @endforeach

</div>

@stop


