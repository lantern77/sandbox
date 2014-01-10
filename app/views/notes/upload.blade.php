@extends("template")

@section("content")
<div class="jumbotron">
    <form method="post" enctype="multipart/form-data" action="/notes">

        File: <input type="file" name="filename" size="40"><br>  <!-- size: size of filename box -->

        Name/Description: <br>
        <input type="text" name="desc" size="35" maxlength="40"> <br>

        Course: <br>
        <select name="course" >

            @foreach ($fullNames as $course)
            <h2><option value={{$course->code}}>{{$course->code}}</option></h2>


            @endforeach

        </select><br>


        <input type="submit" value="Submit"><br>

        {{Session::get('message')}} <!-- upload status message -->

    </form>
</div>
@stop



