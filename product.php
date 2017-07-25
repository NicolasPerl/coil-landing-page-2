<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Product</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- This page's style sheet -->
    <link href="styles/product.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--CDN link for  TweenMax-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

    <!--typed.js-->
    <script src="lib/typed.min.js" type="text/javascript"></script>

    <!-- Lato font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:black,400,900" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  </head>

  <body>
      <div class="background-image">
      </div> <!-- background-image-->

      <!--<div class="container">-->
        <div class="row row1">
          <div class="col-lg-12">
            <a class="navbar-brand" href="/index.php">
                  <img id="logo" alt="Brand" src="images/coil_logo_clear.png">
            </a>
            <div class="loginButtons">
              <a class="button" href="#" id="loginButton"><strong>login</strong></a>     
              <a class="button" href="#" id="signupButton"><strong>signup</strong></a>
              <a class="button" href="#" id="blueprint"><strong>blueprint</strong></a>
            </div>  
          
          </div>

        </div>




<!--
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="/index.php">
                  <img id="logo" alt="Brand" src="images/coil_logo_clear.png">
                </a>
              </div>
              <div class="loginButtons">
                <ul class="nav navbar-nav">
                  <li class="button"><a href="#" id="loginButton"><strong>login</strong></a></li>
                  <li class="button"><a href="#" id="signupButton"><strong>signup</strong></a></li>
                  <li class="button"><a href="#" id="blueprint"><strong>blueprint</strong></a></li>
                </ul>
              </div>
            </div>
          </nav>
-->


<!--
            <nav class="navbar fixed-top navbar-light bg-faded">
              
              <div class="navbar-brand">
                <div class="loginButtons" id="button">
                <a class="button" href="#" id="loginButton"><strong>login</strong></a>     
                <a class="button" href="#" id="signupButton"><strong>signup</strong></a>
                <a class="button" href="#" id="blueprint"><strong>blueprint</strong></a>
                </div>
              </div>
            </nav>
            -->
            
                <!--<div class="container-fluid">-->
                    
            
            <!-- Login buttons-->
                
  
                
          </div> <!-- row 1 -->
        <div class="row row2">
          <div class="col-sm-12">
            <form class="coil-vid-button text-center" action="/product_video.php">
                <button id="coil-vid-button" class="btn btn-default btn-lg" type="submit">Watch the film</button>
            </form>
          </div> <!-- col -->
        </div> <!-- row 2 -->
     <!-- </div>  container-fluid -->

      <!--<div class="container">-->
        <div class="row row3">
          <div class="col-sm-12">
          
          <!-- typed.js injection -->
            <div class="type-wrap">
               <div id="typed-strings">
                  <h1 class="headline text-center">Your journey to making an A</h1>
                  <h1><em>just</em> got a whole lot <strong>easier.</strong></h1>
                </div>
              <span id="typed" style="white-space:pre;"></span>
            </div>
            <!-- typed.js ends here -->

            <!--<h1 class="headline text-center">Your journey to making an A+ just got a whole lot easier</h1>-->
        </div> <!-- col -->
      </div> <!-- row 3 -->

      <!-- typed.js script -->
       <script>
        var typed = new Typed('#typed', {
          stringsElement: '#typed-strings',
          typeSpeed: 40,
          loop: true,
          backDelay: 500,
          startDelay: 1000,
        });
      </script>
      <!-- typed.js script ends here -->


        <div class="row row4">
          <div class="col-lg-12">
            <img src="/images/Steps.png" id="steps">
          </div>
          <div class="col-sm-4 text-center col-1">
            <img id="prof-image" src="/images/prof.png">
            <h2>Professor invites students to the class</h2>
          </div> <!-- col 1 -->
          <div class="col-sm-4 text-center col-2">
            <img id="board-image" src="/images/board.png">
            <h2>In each class, there's a board that acts as the central hub</h2>
          </div> <!-- col 2 -->
          <div class="col-sm-4 text-center col-3">
            <img id="students-image" src="/images/iPad-coffee-pencil.png">
            <h2>On the board students have the power to...</h2>
            <h4 id="scroll-down">(Scroll down to see!)</h4>
          </div> <!-- col 3 -->
        </div> <!-- row 4 -->


<!-- feature description section -->

        <!-- coils -->
        <div class="coils">
          <canvas id='confeti'></canvas>
            <div class="row row5 text-center">
              <div class="col-md-6"> 
                <img id="coil-image" src="/images/prof.png">
              </div> <!-- col -->
              <div class="col-md-6">
                <h1 class="coil-headline">Coils</h1>
                <h3>Coil knows that studying with classmates, especially in person, is the most effective way to learn. Coil lets you create a coil (our word for study group) that your classmates can join.  Whether it's to finish homework or study for that upcoming test, a coil is where great minds come together to collaborate and educate each other.</h3>
              </div> <!-- col -->
            </div> <!-- row 5 -->
            <!-- tutoring -->
            <div class="row row6 text-center hidden-xs">
              <div class="tutor-background">
                <div class="col-md-6">
                  <h1 class="tutoring-headline">Classmate tutoring</h1>
                  <h3>Unless you're a genius you've probably felt confused in some classes. Thankfully, a few of your classmates understand what's going on. And Coil will connect you to them. You'll receive the help you need while  your classmate gains a deeper understanding of the material by explaining it to you, which is backed up by the Feynman technique - the guy who won the Nobel Peace Prize</h3>
                </div> <!-- col -->
              </div>
              <div class="col-md-6">
                <img id="tutoring-image" src="/images/prof.png">
              </div> <!-- col -->
            </div> <!-- row 6 -->
          
          <div class="row row6 text-center visible-xs hidden-sm hidden-md hidden-lg">

            <div class="col-md-6">
              <img id="tutoring-image" src="/images/prof.png">
            </div> <!-- col -->

            <div class="col-md-6">
              <h1 class="tutoring-headline">Classmate tutoring</h1>
              <h3>Unless you're a genius you've probably felt confused in some classes. Thankfully, a few of your classmates understand what's going on. And Coil will connect you to them. You'll receive the help you need while  your classmate gains a deeper understanding of the material by explaining it to you, which is backed up by the Feynman technique - the guy who won the Nobel Peace Prize</h3>
            </div> <!-- col -->

          </div> <!-- row 5 -->

          <!-- leaderboard -->
          <div class="row row7 text-center">
            <div class="col-md-6">
              <img id="leaderboard-image" src="/images/Gurus.png">
            </div> <!-- col -->

            <div class="col-md-6">
              <h1 class="leaderboard-headline">Gurus</h1>
              <h3>Students earn points by collaborating in study groups, explaining topics to classmates, and contributing to the classroom discussion (chit chat). The professor will have access to the leaderboard so he'll see if you really went the extra mile! </h3>
            </div> <!-- col -->
          </div> <!-- row 5 -->


          <!-- chit chat -->
          <div class="row row8 text-center hidden-xs">
            <div class="col-md-6">
              <h1 class="chit-chat-headline">Chit Chat</h1>
              <h3>Coil enables students to ask questions and get answers from classmates or the professor, and send pictures, videos, or files. We all know no question is a dumb question but just in case, you can post anonymously. </h3>
            </div> <!-- col -->

            <div class="col-md-6">
              <img id="chit-chat-image" src="/images/upload.png">
            </div> <!-- col -->
          </div> <!-- row 5 -->

          <div class="row row8 text-center visible-xs hidden-sm hidden-md hidden-lg">

            <div class="col-md-6">
              <img id="chit-chat-image" src="/images/prof.png">
            </div> <!-- col -->

            <div class="col-md-6">
              <h1 class="chit-chat-headline">Chit Chat</h1>
              <h3>Coil enables students to ask questions and get answers from classmates or the professor, and send pictures, videos, or files. We all know no question is a dumb question but just in case, you can post anonymously. </h3>
            </div> <!-- col -->
            
          </div> <!-- row 5 -->
        </div> <!-- coils -->
     <!-- </div>  container -->

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
                <center><span class="glyphicon glyphicon-heart" id="coilFooter" aria-hidden="true">coil</span> 
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







    <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <script src="canvas-confetti/js/coffee-script.js"></script>


    <!--<script src="lib/typed.js" type="text/javascript"></script> -->

  </body>

            <!--
                    <form class="navbar-right" action="/proof.php">
                      <button id="proofCoilWorks"type="submit" class="btn btn-default navbar-btn pull-right">Proof Coil Works</button>
                    </form>
            -->



</html>