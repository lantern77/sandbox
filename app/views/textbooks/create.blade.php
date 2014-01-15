@extends('template')

@section('content')

<div class = "jumbotron text-centre">

<h2><a href="/textbooks">Return to textbook listings</a></h2>

<?php echo $errors->first('title'); ?>
<?php echo $errors->first('description'); ?>
<?php echo $errors->first('course'); ?>
<?php echo $errors->first('condition'); ?>
<?php echo $errors->first('price'); ?>
<?php echo $errors->first('isbn'); ?>
<?php echo $errors->first('edition'); ?>

<form action="/textbooks"method="post">
  <div class="form-group">
    <label for="title">Textbook Title:</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Textbook title" >
    <!--<script>var title = title;</script>-->
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <input type="text" class="form-control" name="description" placeholder="Describe the book">
  </div>
  <div class="form-group">
    <label for="course">Course:</label>
    <input type="text" class="form-control" name="course" placeholder="What course is this textbook for?">
  </div>
  <div class="form-group">
    <label for="condition">Condition:</label>
    <input type="text" class="form-control" name="condition" placeholder="What condition is the textbook in?">
  </div>
  <div class="form-group">
    <label for="price">Asking Price:</label>
    <input type="number" class="form-control" name="price" placeholder="What is your asking price?">
  </div>
  <div class="form-group">
    <label for="isbn">ISBN:</label>
    <input type="text" class="form-control" name="isbn" placeholder="What is the textbook's ISBN? Exclude spaces and dashes.">
  </div>
  <div class="form-group">
    <label for="edition">Version or Edition:</label>
    <input type="number" class="form-control" name="edition" placeholder="What is the textbook's edition or version (enter a number)?">
  </div> 

<!--<label for="file">Upload a picture of the textbook you wish to sell:</label>
<input type="file" name="file" id="file"><br> -->
<input type="submit" name="submit" value="Submit">
</form> 

</div>
@stop