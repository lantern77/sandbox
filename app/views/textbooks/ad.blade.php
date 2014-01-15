@extends('template')

@section('content')
    <div class="jumbotron">

    @foreach($textbooks as $t)
    <div class="row">
        <h2>{$t->name}}</h2>
    </div>
    @endforeach
    
	<table class="textbook">
	<thead>
	<tr>
		<th>Picture</th><th>Title</th><th>Price</th><th>Condition</th><th>Date Posted</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><img src="" alt="Picture" /></td><td>asldj</td><td>5</td><td>Good</td><td>November 26</td>
	</tr>
	</tbody>
	</table>

	

        
    </div>
@stop
