@extends("template")

@section("content")
<div class="jumbotron text-left">

    <div class="page-header">
        <h1>Course Materials</h1>
    </div>
    <p class="lead">
        Past exams, class notes, required texts, etc. can all be found here. 
    </p>

    <div>
        <h2 style="float:left">select a course</h2>
    </div>

    <br></br>
    <select id="courseDropDown" name="courseSelect"> <!-- the dropdown menu --> 
        @foreach ($course_listings as $course)
        <option>{{$course->code}}</option>
        @endforeach
    </select>  
    <button onclick="showCourse()">Go</button>
    <h2 style="float:right"><a href = "/notes/create"> upload a file</a></h2> 



</div>


<div class="jumbotron text-left" id="all" style="display:none">	
    <h2 id="courseTitle">Course</h2><br>

    @foreach($course_listings as $course)
    <div id="{{$course->code}}" style="display:none" title="{{$course->code}} - {{$course->name}}">

        <?php
        if (!array_key_exists($course->code, $course_notes)) {
            echo 'Nothing has been uploaded for this course yet.';
        } else {
            foreach ($course_notes[$course->code] as $note) {

                $tooltip =
                        'Submitted by ' . $note->authorName .
                        ' on ' . date("l F jS g:i A", $note->date);
                echo('<a title="' . $tooltip . '" href = "/notes/' . $note->id . '">' . $note->file_description . '</a><br>');
            }
        }
        ?>
    </div>
    @endforeach


</div>



@stop

<script>
    // script that displays notes only for the selected course.
    // The HTML element representing each course is accessed by using the course name as the element's id.
    var last = "2AA4"; 

    function showCourse(){

        var thing = document.getElementById("all");
        $(thing).show();

        $(last).hide(); //Hide notes for the previously viewed course.


        var e = document.getElementById("courseDropDown");
        var sel = e.options[e.selectedIndex].text; //course code of the currently selected course.

        var current = document.getElementById(sel); //the div for the course

        $(current).show(); // Show notes for newly selected course.
 
        var title = current.title;
        document.getElementById("courseTitle").innerHTML=title;
 
        last = current;  //update for the next request.
    }

    divname.note[i]



    function toggleNote(item) {
        $(item).toggle();
    }
</script>
