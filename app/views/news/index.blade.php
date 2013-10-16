@extends('template')

@section('content')
<div class="jumbotron">
    @foreach($news as $n)
    <div class="row text-center">    
    <h3><a href="/news/{{$n->id}}">{{$n->title}}</a></h3>
    {{$n->brief_intro}}
    </div>

    @endforeach
</div>
@stop
