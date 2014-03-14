<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>About - Project Rainfall</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://raw.github.com/mozilla/browserid-cookbook/master/php/css/persona-buttons.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://login.persona.org/include.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="logo.png" height="20" width="20" alt="Project Rainfall" title="Project Rainfall" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="about.php">About</a></li>
            <li><a href="mailto:zebmccorkle@gmail.com">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li id="login" style="background-color: orange;"><a href="#">Login</a></li>
                <li id="logout"><a href="#">Log out</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Cloud Management</li>
                <li><a href="#">Create Cloud</a></li>
                <li><a href="#">Manage Clouds</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container">
        <br />
        <span class="lead font-myriadapple">Project Rainfall.</span> Zeb McCorkle thought up a consumer virtualization network in the Fall of 2013. He kept the idea in his mind until March 13, 2014, when the website development started.<hr />
        The basic idea is (Rain) Clouds on (Rain) Storms, hence the tagline "<span class="font-roboto-thin">Taking virtual private machines by Storm.</span>" A Cloud is a virtual machine, and a Storm is the physical machine that hosts many Clouds. Creating a Cloud is as simple as paying <i>once</i> for the Cloud then paying a monthly power fee based off the CPU usage of your Cloud. Upgrading your Cloud is as simple as shutting down and buying new "parts" on the web interface.<hr>
        <h2>About the Team</h2>
        <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/zebmccorkle.png" alt="...">
      <div class="caption">
        <h3>Zeb McCorkle</h3>
        <p>Web frontend and StormOS dev</p>
      </div>
    </div>
  </div>
</div>
      <hr>

      <footer>
        <p>&copy; 2014 Creative Studios</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>