<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="/css/admin/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/admin/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="/css/admin/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="/css/admin/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="/js/admin/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/admin">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> {{Auth::user()->email}} <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="/admin">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="/admin/news">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/admin/about">About Us</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/admin/events">Events</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/admin/faq">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="/admin/users">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/admin/users/create">New User</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

 <div class="container-fluid">
            <div class="row-fluid">
<div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="/admin"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/admin/events"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="/admin/stats"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li>
                            <a href="/admin/gallery"><i class="icon-chevron-right"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-success pull-right">731</span> New Users</a>
                        </li>
                    </ul>
                </div>
                <div class="span9" id="content">
                    @yield("content")
                </div>
            </div>
            <hr>
            <footer>
                <p>© McMaster Software Engineering Club 2013</p>
            </footer>
        </div>
<!--/.fluid-container-->
        <script src="/js/admin/jquery-1.9.1.min.js"></script>
        <script src="/js/admin/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="/js/admin/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
            });
        </script>
    </body>
</html>
