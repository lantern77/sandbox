@extends('template')

@section('content')
    <div class="jumbotron ">
        <a href="/news"><h4>Back to News</h4></a>
        <div class="row text-center">    
            <h1>{{$story->title}}</h1>
            <p>{{$story->full_text}}</p>
        </div>
    </div>

@stop

