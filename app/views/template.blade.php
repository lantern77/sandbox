<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>McMaster Software Engineering Club</title>

    <link href='http://fonts.googleapis.com/css?family=Alef:400,700|Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/lightbox.css" rel="stylesheet">
  </head>

  <body>
    <section class="container">
        <header class="row" id="header">
        <!-- Begin grid -->
            <div class="col-sm-9">
                <h1>McMaster SEClub</h1>
            </div>
            <div class="col-sm-3">
                <div class="announce well well-sm">
                    <h4>No Upcoming Events</h4>
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
            <a class="navbar-brand" href="/">Home</a>
        </div>
        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/news">Current News</a></li>
                            <li><a href="/news">Past News</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/about/">What are we</a></li>
                            <li><a href="/about/history">History</a></li>
                            <li><a href="/about/executives">Current Executives</a></li>
                            <li><a href="/about/members">Current Members</a></li>
                            <li><a href="/about/sponsors">Current Sponsors</a></li>
                            <li class="divider"></li>
                            <li><a href="/about">Want to be a Sponsors?</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/events/cusec">CUSEC</a></li>
                            <li><a href="/events/current">Current Events</a></li>
                            <li><a href="/events/past">Past Events</a></li>
                            <li><a href="/events/gallery">Event Gallery</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learn<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/tutorials">Tutorials</a></li>
                            <li><a href="/resources">Resources</a></li>
                        </ul>
                </li>

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
            <div class="col-sm-3">
                <h4>Previous</h4>
            </div>

            <div class="col-sm-3">
                <h4>Social</h4>
            </div>

            <div class="col-sm-3">
                <h4>Media</h4>
            </div>

            <div class="col-sm-3">
                <h4>Contact</h4>
            </div>

            <div class="col-1"></div>
        </div> <!--row-->
    </footer>

<!--JS Files-->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/lightbox-2.6.min.js"></script>
  </body>
</html>
