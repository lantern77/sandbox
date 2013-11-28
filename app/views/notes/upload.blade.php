@extends("template")

@section("content")
<div class="jumbotron">
<form method="post" enctype="multipart/form-data" action="/notes">

File: <input type="file" name="filename" size="40"><br>  <!-- size: size of filename box -->

Course: <select name="course">
<option value="2DM3">2DM3</option>
<option value="2DA4">2DA4</option>  <!-- should list every course in SE -->
<option value="3A04">3A04</option>
<option value="3RA3">3RA3</option>
</select><br>


<input type="submit" value="Submit">



</form>
</div>
@stop



