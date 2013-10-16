@extends("admin.news.template")

@section("content")
    <form action="/admin/news" method="POST" role="form">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="display_date">Display Starting:</label>
                <input type="date" class="form-control" id="display_date" name="display_date">
            </div>
            <div class="form-group col-md-6">
                <label for="end_publish_date">Stop Displaying On:</label>
                <input type="date" class="form-control" id="end_publish_date" name="end_publish_date">
            </div>
        </div>
        <div class="form-group">
            <label for="brief_intro">Brief Introduction to Story</label>
            <textarea class="ckeditor" name="brief_intro"></textarea>
        </div>
        <div class="form-group">
            <label for="full_text">News Story</label>
            <textarea class="ckeditor" name="full_text"></textarea>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
            
    </form>
    
@stop
