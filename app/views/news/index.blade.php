@extends('template')

@section('content')
    @foreach($news as $n)
    <div class="row text-center">    
    <h1><a href="/news/{{$n->id}}">{{$n->title}}</a></h1>
    <p>{{$n->brief_intro}}</p>
    </div>

    @endforeach
@stop
