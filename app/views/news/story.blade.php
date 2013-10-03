@extends('template')

@section('content')
    <div class="row text-center">    
    <h1>{{$story->title}}</h1>
    <p>{{$story->full_text}}</p>
    </div>

@stop

