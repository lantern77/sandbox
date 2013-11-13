<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Alef:400,700|Roboto+Slab' rel='stylesheet' type='text/css'>

    <title>Software Engineering Club - Administration</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/admin/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/admin">SEClub Admininstration</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/admin/news">News</a></li>
            <li><a href="/admin/users">Users</a></li>
            <li><a href="/admin/tutorials">Tutorials</a></li>
            <li><a href="/admin/events">Events</a></li>
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>-->
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown navbar-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->email}} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/admin/profile">Profile</a></li>
                <li><a href="/logout">Logout</a></li>
                </ul>              
          </li>
        </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div id="mainContainer" class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-3">
        <div class="well sidebar-nav">
            <ul class="nav">
                @yield("sideMenu")
              <h3>Quick Links</h3>
              <li><a href="/admin/news/create">New News Story</a></li>
              <li><a href="#">New Tutorial</a></li>
              <li><a href="#">New Event</a></li>
            </ul>
          </div> 
        </div>
        <div class="col-lg-9">
            <div class="jumbotron">
                @yield('content')
            </div>
       </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/ckeditor.js"></script>
    <script src="/js/styles.js"></script>
    <script src="/js/config.js"></script>
    <script src="/js/en.js"></script>
@yield("scripts")  

</body></html>
