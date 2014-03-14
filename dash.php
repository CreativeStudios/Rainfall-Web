<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Rainfall Dashboard</title>
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
        <script>
            function startCloud() {
                $("cloudname").val();
                $.ajax({
                    url: "http://192.168.1.110:9001/start/" + $("#cloudname").val()
                });
                alert("Cloud " + $("#cloudname").val() + " started.");
            }
            function killCloud() {
                $.ajax({
                    url: "http://192.168.1.110:9001/kill/" + $("#cloudname").val()
                });
                alert("Cloud " + $("#cloudname").val() + " killed.");
            }
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
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
            <li class="active"><a href="dash.php">Dashboard</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container">
        <br />
        <div class="page-header">
            <h1>Rainfall Dashboard <small><span class="label label-info">BETA</span></small></h1>
            <div class="alert alert-warning"><strong>Attention:</strong> You are using a beta version of Project Rainfall which is subject to change.</div>
        </div>
        <h2>Start/Stop Cloud</h2>
        <input type="text" id="startstop-cloudname" class="form-control" placeholder="Cloud ID" /><br />
        <center><div class="btn-group">
            <button type="button" class="btn btn-success" onclick="startCloud();">Start Cloud</button>
            <button type="button" class="btn btn-danger" onclick="killCloud();">Kill Cloud</button>
        </div></center>
        <h2>Create Cloud</h2>
        <input type="text" id="create-username" class="form-control" placeholder="Username" />
        <input type="text" id="create-cloudname" class="form-control" placeholder="Cloud ID" />
        <select class="form-control" name="create-os" id="create-os">
            <option disabled>Operating System</option>
            <option>Ubuntu_64</option>
        </select>
        <div class="input-group">
            <input type="text" class="form-control" id="create-ram" placeholder="RAM" />
            <span class="input-group-addon">MB</span>
        </div>
        <div class="input-group">
            <input type="text" class="form-control" id="create-vram" placeholder="Graphics Memory" />
            <span class="input-group-addon">MB</span>
        </div>
        <select class="form-control" name="create-os" id="create-cores">
            <option disabled>Cores</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        <div class="input-group">
            <input type="text" class="form-control" id="create-speed" placeholder="Speed" />
            <span class="input-group-addon">%</span>
        </div>
        <label class="radio-inline">
            <input type="radio" name="create-firmware" id="create-bios" value="bios" /> Legacy BIOS
        </label>
        <label class="radio-inline">
            <input type="radio" name="create-firmware" id="create-efi" value="efi" /> (U)EFI
        </label>
        <div class="input-group">
            <input type="text" class="form-control" id="create-sram" placeholder="Shared RAM" />
            <span class="input-group-addon">MB</span>
        </div>
        <div class="input-group">
            <input type="text" class="form-control" id="create-sram" placeholder="Hard drive size" />
            <span class="input-group-addon">MB</span>
        </div><br />
        <center><button type="button" class="btn btn-success">Create Cloud</button></center>
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