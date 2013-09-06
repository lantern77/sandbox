<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Software Engineering Club, McMaster University</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #FFF;
        margin: 0;

      }
      body {
        padding-top: 40px; 
      }

      h1 { position: relative; }
      .container {
        width: 300px;
        margin: 0 auto;
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; 
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 1px 1px 1px 2px rgba(0,0,0,.25);
           -moz-box-shadow: 1px 1px 1px 2px rgba(0,0,0,.25);
                box-shadow: 1px 1px 1px 2px rgba(0,0,0,.25);
      }

	  .login-form {
		margin-left: 65px;
	  }
	
	  legend {
		margin-right: -50px;
		font-weight: bold;
	  	color: #404040;
	  }

    </style>

</head>
<body>

  <div class="container">
    <h1> Admin Login </h1>
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Login</h2>
        <form action="/sandbox/index.php/admin/login" method="post"> 

          <label>Username</label>
          <input id="user" name="user" type="text" > <br/>
          <label>Password</label>
          <input id="pass" name="pass" type="password" > <br/>
          <input type="submit" id="submit" value="Log In">
        </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
</body>
</html>