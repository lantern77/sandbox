@extends("admin.events.template")

@section('content')
    <form action="/admin/events" method="POST" role="form">
        <div class="form-group">
            <label for="title">Event Name:</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="display_date">Date:</label>
                <input type="date" class="form-control" id="display_date" name="display_date">
            </div>
            <div class="form-group col-md-6">
                <label for="start_time">Start time:</label>
                <input type="text" class="form-control" id="start_time" name="start_time">
            </div>
             <div class="form-group col-md-6">
                <label for="end_time">End time:</label>
                <input type="text" class="form-control" id="end_time" name="end_time">
            </div>
        </div>
        <div class="form-group">
            <label for="brief_intro">Event Description</label>
            <textarea class="ckeditor" name="brief_intro"></textarea>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
        <div class="jumbotron">
             <a href= "http://www.workingatmcmaster.ca/link.php?link=eohss:health-safety-forms" target="_blank" >Click here to fill out EHOSS form </a> 
         </div>
            
    </form>
@stop

