@extends('template')

@section('content')
<div class="jumbotron">
        <div class="page-header">
          <h1>Welcome to the McMaster Software Engineering Club</h1>
        </div>
        <p class="lead">
            Come one, come all! Here at the McMaster Software Engineering Club we strive to push the software engineering discipline at McMaster University.
        </p>
</div>
{{-- Random things --}}
<div class="row col-wrap">
    <div class="col-sm-4 col">
        <div class="well text-center">
            <h2>Open Source</h2>
            <img src="http://opensource.org/files/osi_standard_logo.png" width="175" height="200" alt="open source">
        </div>
    </div>
    <div class="col-sm-4 col">
        <div class="well">
            <h2>Upcoming Events</h2>
            <p>There are currently no upcoming events</p>
        </div>
    </div>
    <div class="col-sm-4 col">
        <div class="well">
            <h2>New Course Material</h2>
            <p>There is currently no new course material</p>
        </div>
    </div>
</div>

<div class="row base col-wrap">
<!-- add a second row of wells or rounded corner divs immeadiately underneath-->
<div class="col-sm-4 col-base"><div class="well"></div></div>
<div class="col-sm-4 col-base"><div class="well"></div></div>
<div class="col-sm-4 col-base"><div class="well"></div></div>
</div><!-- close row -->

@stop

