@extends("admin.tutorials.template")

@section("content")
    <form id="tutorialForm" action="/admin/tutorials" method="POST" role="form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <label for="host">Host</label>
            <input type="text" class="form-control" id="host" placeholder="Host" name="host">
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group col-md-6">
                <label for="time">Time:</label>
                <input type="time" class="form-control" id="time" name="time">
            </div>
        </div>
        <div class="form-group">
            <label for="brief_intro">Brief Introduction to Tutorial</label>
            <textarea class="ckeditor" name="brief_intro"></textarea>
        </div>
        <div class="form-group">
            <label for="full_text">Tutorial Description</label>
            <textarea class="ckeditor" name="full_text"></textarea>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <span class="items" >Items to bring:</span><br/>
                <ol id="items">
                    <li><input type="text"></li>
                </ol>
                <a id="addItems" href="#"><span class="items">Add Another Item?</span></a>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                <input type="hidden" name="items" id="hiditems">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div> 
    </form>
@stop

@section("scripts")
<script type="text/javascript">
$("#addItems").click(function(){
    $("#items").append("<li><input type='text'></li>");
    return false;
});
$("#tutorialForm").submit(function(){
    //get the list of items and append into a single string
    var vals = "";
    $("#items input").each(function(){
        vals = vals + "," + $(this).val();
    });
    $("#hiditems").val(vals.substring(1));
    return true;
});
</script>

@stop
