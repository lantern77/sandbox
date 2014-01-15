@extends('template')

@section('content')
    <div class="jumbotron">

	<h2 align="center"><a href="/textbooks/create">Post Ad!</a></h2>

   <!-- @foreach($textbooks as $t)
    <div class="row">
        <h2>{{$t->Title}}</h2>
        {{$t->Description}}
    </div>
    @endforeach-->
    
<br>

	<table border="1" align="center" width="100%">
	<thead>
	<tr>
		<th>Picture</th><th>Title</th><th>Price</th><th>Condition</th><th>Date Posted</th>
	</tr>
	</thead>
	<tbody>
	@foreach($textbooks as $t)
	<tr>
		<td><img src="" alt="Picture"/></td><td><a href="/textbooks/ads+{{$t->Title}}">{{$t->Title}}</a></td><td>{{$t->Price}}</td><td>{{$t->Cond}}</td><td>{{$t->Date}}</td>
	</tr>
	@endforeach
	</tr>
	</tbody>
	</table>

	

        
    </div>
@stop
