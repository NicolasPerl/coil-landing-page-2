<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>coil</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="lib/typed.min.js" type="text/javascript"></script>

    <!-- This page's style sheet -->
    <link href="styles/index.css" rel="stylesheet">
    <!-- Mobile Friendly-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--favicon in tab-->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:black,400,900" rel="stylesheet">
    <!--
    <style>
      body {
        font-family: 'Lato', serif;
        font-size: 200%;
      }
    </style>
-->



  </head>
  <body>
      <div class="col-lg-12">
        <div class="homepage-hero-module">
            <div class="video-container">
                <div class="loginButtons">
                    <img src="images/landing-page-logo.png" id="landing-page-logo" alt="coil logo">
                    <!--Figure out how to make button link up-->
                    <a href="#" id="loginButton" class="btn btn-primary btn-sm"><strong>login</strong></a>
                    <a href="#" id="signupButton" class="btn btn-primary btn-sm"><strong>signup</strong></a>
                </div>
                <div class="filter"></div>
                <video autoplay loop class="fillWidth" preload="autoplay">
                    <source src="Comfy/MP4/Comfy.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="Comfy/WEBM/Comfy.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
                <!--<center><h1 id="headline">Collaborate with your classmates <br>or get tutored by them</h1></center>-->
                <!-- typed.js injection -->
                <div class="type-wrap">
                    <div id="typed-strings">
                        <h1>Collaborate with your <strong>classmates</strong></h1>
                        <h1>Or get <em>tutored</em> by them.</h1>
                    </div>
                    <span id="typed"></span>
                </div>
                <!-- typed.js ends here -->
                    <center><a href="/product.php" id="productButton" class="btn btn-default btn-lg"><strong>product</strong></a></center>

                <!-- typed.js script -->
                <script>
                    var typed = new Typed('#typed', {
                    stringsElement: '#typed-strings',
                    typeSpeed: 40,
                    loop: true,
                    backDelay: 700,
                    startDelay: 1000,
                    showCursor: true,
                    backSpeed: 20,
                    });
                </script>
                <!--typed.js ends here -->


                <div class="poster hidden">
                    <img src="Comfy/Snapshots/Comfy.jpg" alt="">
                </div>
            </div>
        </div>
      </div>

    <footer>
        <div class="row">
            <div class="col-md-4">
                <center><p id="usingCoilFooter"> using coil</p>
                <div class="footerLinks">
                    <a href="/product.php"> product </a><br>
                    <a href="#"> prove it </a>
                </div></center>
            </div>
            <div class="col-md-4">
                <center><span class="glyphicon glyphicon-heart" id="coilFooter" aria-hidden="true"></span> coil
                <div class="footerLinks">
                    <a href="#"> policy </a><br>
                    <a href="#"> support </a>
                </div></center>
            </div>
            <div class="col-md-4">
                <center><p id="handyLinksFooter">tool box</p></center>
                <div class="footerLinks">
                    <a id="toolBox" href="#"> iOS app</a>
                </div>
            </div>
        </div>
    </footer>

      <!-- jQuery -->
      
    <script src="js/jquery.js"></script>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="js/bootstrap.min.js" type="text/javascript"></script>

  </body>


</html>