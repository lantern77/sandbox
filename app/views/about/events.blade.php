@extends('template')

@section('content')
<div class="jumbotron">
    <h3>Events</h3>
        @foreach(range(1,10) as $x)
            <div class="row" style="margin-top:20px">
                @foreach(range(1,4) as $y)
                <div class="col-sm-3">
                    <a href="http://placehold.it/800x500?{{$y}}" data-lightbox="group{{$x}}" title="img title row {{$y*$x}}">
                        <img src="http://placehold.it/200x50">
                    </a>
                </div>
                @endforeach
            </div>
                    
        @endforeach
</div>
@stop

