@extends("template")

@section("content")
<div class="jumbotron text-center">
    @foreach($tuts as $t)
    <div class="row">
        <h2><a href="/tutorials/{{$t->id}}">{{$t->name}}</a></h2>
        {{$t->brief_intro}}
    </div>
    @endforeach

</div>
@stop


