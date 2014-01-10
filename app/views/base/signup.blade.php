@extends('template')

@section('content')
<div class="jumbotron">
  <h3>User Sign-up Form</h3>  <!--Feel free to add additional gui--> 
	@if($errors!=NULL)
		@foreach ($errors->all() as $message)
			<li style="color:red;font-family:Verda">*{{ $message }}</li>
		@endforeach
	@endif
	<form role="form" action = "/signupcreate" method = "post"> <!-- Note the importance of post here-->
  <div class="form-group">
    <label for="first_name">First Name</label> <!--Variable firstname-->
    <input type="text" name = "first_name" class="form-control" id="first_name" placeholder="First Name" value=<?php echo Input::old('first_name');?>>
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label><!--Variable lastname-->
    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" value=<?php echo Input::old('last_name');?>>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password must be at least eight characters">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Verify Password</label> 
    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Please Verify Password">
  </div>
  <div class="form-group">
    <label for="email">Mcmaster E-mail</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Must Be a Valid Mcmaster E-mail" value=<?php echo Input::old('email');?>>
  </div>
   <div class="form-group">
    <label for="description">Short Description of yourself?</label>
    <textarea type = "text" name = "description" id="description"  class="form-control" rows="3" placeholder ="Write a brief description of yourself, note you may leave this empty." value=<?php echo Input::old('description');?>></textarea>
  </div>
 <button action="/login" type="submit" class="btn btn-default">Submit</button>

</form>
</div>
@stop