@extends("template")
@section("content")
<!--By Arka Ganguli-->

<div class="jumbotron">
  <h3>Tutor Application Form</h3>
	<form method = "post" enctype = "multipart/form-data" action = "/tutors">

  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name = "firstname" class="form-control" id="firstname" placeholder="First name">
  </div>

  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
  </div>

  <div class="form-group">
    <label for="year">Program Year</label>
      <select name = "year" class="form-control">
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
      </select>
  </div>

   <div class="form-group">
    <label for="course">Course you want to teach</label>
      <select name = "course" class="form-control">
         @foreach ($courseName as $course)
            <h2><option value={{$course->code}}>SE {{$course->code}}</option></h2>
          @endforeach
      </select>
  </div>

  <div class="form-group">
    <label for="email">E-Mail</label>
    <input type="text" name = "email" class="form-control" id="email" placeholder="Mac ID Email">
  </div>

    <div class="form-group">
    <label for="description">Short Description of your credentials</label>
    <textarea type = "text" name = "description" class="form-control" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@stop