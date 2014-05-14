<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>McMaster Software Engineering Club </title>
    <link href='http://fonts.googleapis.com/css?family=Alef:400,700|Roboto+Slab' rel='stylesheet' type='text/css'>
	
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/lightbox.css" rel="stylesheet">
	


  </head>

  <body>
    <section class="container">
        <header class="row" id="header">
        <!-- Begin grid -->
            <div class="col-sm-9"><!--Top of the page-->
                <a href="/" id="titleLink" class="blackColour"><h1 id="webpageTitle">McMaster SEClub</h1></a>
				<div id="titleImage"><img src="/img/logo.gif" width=150 height=110></div>
            </div>
            <div class="col-sm-3">
                <div id ="signin" class="announce well well-sm">

                        @if(Auth::check())
                        <h4>{{Auth::user()->first_name . ' ' . Auth::user()->last_name}}</h4>
                        <a href="/logout">Log out</a>
                        @else
                        <form class="form-signin" action="/login" method="POST">
                            <input name="email" type="text" class="form-control" value="{{isset($email) ? $email : ""}}" placeholder="Email address" autofocus>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <input type="submit" value="Sign In" style="padding-top: 5px">
                            @if(Session::get('error') || isset($error))
                            <div style="color:red; display:inline-block; padding-left:5px; padding-top: 5px" title="{{Session::get('error')}} {{isset($error) ? $error : ""}}">
                                Invalid Login.
                            </div>
                            @endif
                        </form>
                        @endif


                    </div>
            </div>
        <!-- End grid -->
        </header> <!-- header -->
    </section>

    <nav class="navbar navbar-inverse container" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li><a class="" href="/">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/about/">Who are we?</a></li>
                            <li><a href="/about/history">History</a></li>
                            <li><a href="/about/executives">Current Executives</a></li>
                            <li><a href="/about/members">Current Members</a></li>
                            <!--<li><a href="/about/sponsors">Current Sponsors</a></li>
                            <li class="divider"></li>
                            <li><a href="/about">Want to be a Sponsors?</a></li>-->
                        </ul>
                </li>
                <li><a class="" href="/calendar">Calendar</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/events/">Current Events</a></li>
                            <li><a href="/events/past">Past Events</a></li>
                            <li><a href="/events/cusec">CUSEC</a></li>
                            <li><a href="/events/gallery">Event Gallery</a></li>
                        </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Textbooks<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/textbooks/create">Post Ads</a></li>
                <li><a href="/textbooks/">View Ads</a></li>

                        </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learn<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/tutorials">Tutorials</a></li>
                            <li><a href="/resources">Resources</a></li>
                            <li><a href="/notes">Notes</a></li>

                        </ul>
                </li>
                <li><a class="" href="/signup">Sign Up</a></li>



            </ul>
        </div>
    </nav>
{{-- Main Body --}}
    <div class="container">
        @yield('content')
    </div>



{{--Footer--}}

    <footer class="container" id="footer">
        <div class="row text-center">


            <div class="col-sm-6">
                <h4>Social Media</h4>
            </div>

            <div class="col-sm-6">
                <h4>Contact Us</h4>
            </div>

            <div class="col-1"></div>
        </div> <!--row-->
    </footer>
	
	<!--JS Files-->	
	<script src="/js/jquery.js"></script>
	<script src="/js/animation.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/lightbox-2.6.min.js"></script>


  </body>
</html>
