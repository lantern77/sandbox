@extends('template')

@section('content')
    @foreach($news as $n)
    <div class="row text-center">    
    <h1>{{$n}}</h1>
    </div>

    @endforeach
@stop
