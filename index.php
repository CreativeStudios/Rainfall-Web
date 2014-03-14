<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Rainfall</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">

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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
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
            <li><a href="#">
                <?php if (exec("whoami") == "www-data") echo "WELCOME"; else echo "Dev version - WELCOME"; ?>.
            </a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1 class="font-myriadapple"><img src="logo.png" height="64" width="64" alt="logo" title="Logo" />Project Rainfall</h1>
        <p class="font-roboto-thin">Taking virtual private machines by Storm.</p>
        <div class="alert alert-warning"><b>NYI</b> The Rainfall website doesn't quite work... We are hiring a <i>web</i> backend (PHP) developer (not working with VMs at all) to implement the login system. I (Zeb McCorkle) will work on the frontend and StormOS. <p><a class="btn btn-warning btn-lg font-myriadapple" href="https://docs.google.com/forms/d/1Sp8XxT-r6gMJiGDjh_v_JBt-D1Q4eBJkrJY_FYWBcm0/viewform?entry.1056744199=Project+Rainfall+Web+Backend+Programmer+(PHP)&entry.632307721&entry.114788012&entry.1876970427&entry.1649968259=Rainfall+website&entry.631943157">Apply &raquo;</a></p></div>
        <p><a class="btn btn-primary btn-lg font-opensans">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h2>Create a Cloud</h2>
          <p>Press a few buttons and have a virtual computer all to yourself! </p>
          <p><a class="btn btn-default" href="#">Create one &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Host a Server</h2>
          <p>We offer virtual machines with up to 64 GB RAM, 4 cores, super fast processor, and 256GB SSD! Host your web server and backend on these VPSs! </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Raindrops</h2>
          <p>Raindrops. A $99 ARM netbook that connects to the RDP server on each and every Cloud.</p>
          <p><a class="btn btn-default" href="#">Kickstarter coming soon! &raquo;</a></p>
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
