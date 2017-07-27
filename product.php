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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  </head>
  <body>
        <div class="row row1">
          <div class="col-lg-12">
            <canvas id='confeti'></canvas>
            <a class="navbar-brand" href="/index.php">
                  <img id="logo" alt="Brand" src="images/coil_logo_clear.png">
            </a>
            <!-- Login buttons-->
            <div class="loginButtons">
              <a class="button" href="#" id="loginButton"><strong>login</strong></a>     
              <a class="button" href="#" id="signupButton"><strong>signup</strong></a>
              <a class="button" href="windows/index.html" id="gurus"><strong>gurus</strong></a>
              <a class="button" href="/proof.php" id="blueprint"><strong>blueprint</strong></a>

            </div>  
          
          </div>
        </div> <!-- row 1 -->
        <div class="row row2">
          <div class="col-sm-12">
            <div class="text">
              <p id="headline">Your journey to making an A just got a whole lot more &nbsp    
                <span class="word wisteria">engaging.</span>
                <span class="word belize">interactive.</span>
                <span class="word pomegranate">natural.</span>
                <span class="word green">immediate.</span>
                <span class="word midnight">intuitive.</span>
              </p>
            </div>
          </div> <!-- col -->
        </div> <!-- row 2 -->

        <!-- Random Row -->
        <div class="row row3">
          <div class="col-sm-12">
          </div> 
        </div> <!-- row 3 -->

        <div class="row row4">
          <div class="col-lg-12">
            <img src="/images/Steps.png" id="steps">
          </div>
          <div class="col-sm-4 text-center col-1">
            <img id="prof-image" src="/images/professor.png">
            <h2>Professor invites students to the class</h2>
          </div> <!-- col 1 -->
          <div class="col-sm-4 text-center col-2">
            <img id="board-image" src="/images/board.png">
            <h2 class="boardText">In each class, there's a board that acts as the central hub</h2>
          </div> <!-- col 2 -->
          <div class="col-sm-4 text-center col-3">
            <img id="students-image" src="/images/questions.png">
            <h2>On the board students have the power to...</h2>
            <h4 id="scroll-down">(Scroll down to see!)</h4>
          </div> <!-- col 3 -->
        </div> <!-- row 4 -->

        <!-- coils -->
        <div class="coils">
            <div class="row row5 text-center">
              <div class="col-md-6"> 
                <img id="coil-image" src="/images/coilsYellow.png">
              </div> <!-- col -->
              <!-- feature description section -->
              <div class="col-md-6">
                <h1 class="coil-headline">Create coils for when it matters.</h1>
                <h3>Coil knows that studying with classmates, especially <br> in person, is the  most <span class="textColor">effective</span> way to learn.  Coil lets you <span class="textColor">create</span> a coil (our word for study group) that your classmates can join.  Whether it's to finish homework or study for that upcoming test, a coil is where great minds come together to <span class="textColor">collaborate</span> and <span class="textColor">educate</span> each other.</h3>
              </div> <!-- col -->
            </div> <!-- row 5 -->
            <!-- tutoring -->
            <div class="row row6 text-center hidden-xs">
              <div class="tutor-background">
                <div class="col-md-6">
                  <h1 class="tutoring-headline">Classmate tutoring</h1>
                  <h3>Unless you're a genius you've probably felt <span class="textColor">confused</span> in some classes. Thankfully, a few of your classmates understand what's going on. And Coil will <span class="textColor">connect</span> you to them. You'll receive the help you need while your classmate gains a deeper <span class="textColor">understanding</span> of the material by explaining it to you, which is backed up by the Feynman technique - the guy who won the <span class="textColor">Nobel Peace Prize</span></h3>
                </div> <!-- col -->
              </div>
              <div class="col-md-6">
                <img id="tutoring-image" src="/images/classmate-tutoring.png">
              </div> <!-- col -->
            </div> <!-- row 6 -->
          
          <div class="row row6 text-center visible-xs hidden-sm hidden-md hidden-lg">

            <div class="col-md-6">
              <img id="tutoring-image" src="/images/classmate-tutoring.png">
            </div> <!-- col -->

            <div class="col-md-6">
              <h1 class="tutoring-headline">Classmate tutoring</h1>
              <h3>Unless you're a genius you've probably felt <span class="textColor">confused</span> in some classes. Thankfully, a few of your classmates understand what's going on. And Coil will <span class="textColor">connect</span> you to them. You'll receive the help you need while  your classmate gains a deeper <span class="textColor">understanding</span> of the material by explaining it to you, which is backed up by the Feynman technique - the guy who won the <span class="textColor">Nobel Peace Prize</span></h3>
            </div> <!-- col -->

          </div> <!-- row 6 -->

          <!-- leaderboard -->
          <div class="row row7 text-center">
            <div class="col-md-6">
              <img id="leaderboard-image" src="/images/Gurus.png">
            </div> <!-- col -->

            <div class="col-md-6">
              <h1 class="leaderboard-headline">Gurus</h1>
              <h3>Students earn points by collaborating in study groups, <br>explaining topics to classmates, and contributing to the classroom discussion (chit chat). The professor will have access to the leaderboard so he'll see if you really went the extra mile!<br><br> <span class="gurusPage"> Visit the <a href="windows/index.html">gurus page</a> to see how to earn the most points!</span></h3>
              <!--
              <p id="gurusPage">Visit the <a href="windows/index.html">gurus page</a> to see what's activities are worth the most points!</p>-->

            </div> <!-- col -->
          </div> <!-- row 7 -->



          <!--Chit Chat-->
          <div class="row row8 text-center hidden-xs">
            <div class="col-md-12">
              <h1 class="chit-chat-headline">Collaborate with anyone at any time.</h1>
              <h3>Coil enables students to ask questions and get answers from<br> classmates or the professor, and send pictures, videos, or files. We all know no<br> question is a dumb question but just in case, you can post anonymously. </h3>
              <img id="chit-chat-image" src="/images/upload.png">
              <img id="qa-image" src="/images/qa.png">

            </div>
          </div>

          <div class="row row8 text-center visible-xs hidden-sm hidden-md hidden-lg">
            <img id="chit-chat-image" src="/images/upload.png">
            <img id="qa-image" src="/images/qa.png">
            <h1 class="chit-chat-headline">Collaborate with anyone at any time.</h1>
            <h3>Coil enables students to ask questions and get answers from classmates or the professor, and send pictures, videos, or files. We all know no question is a dumb question but just in case, you can post anonymously. </h3>
          </div>
        </div> <!-- coils -->
      <footer>
        <div class="row">
            <div class="col-md-4">
                <center><p id="usingCoilFooter"> using coil</p>
                <div class="footerLinks">
                    <a href="/product.php"> product </a><br>
                    <a href="/proof.php"> prove it </a>
                </div></center>
            </div>
            <div class="col-md-4">
                <center><span class="glyphicon glyphicon-heart" id="coilFooter" aria-hidden="true">coil</span> 
                <div class="footerLinks">
                    <a id="policyLink" href="#"> policy </a><br>
                    <a href="mailto:support@coilapp.com?Subject=Hi%20again!" target="_top">contact us</a>
                </div></center>
            </div>
            <div class="col-md-4">
                <center><p id="handyLinksFooter">tool box</p></center>
                <div class="footerLinks">
                    <a id="toolBox" href="#"> iOS app</a><br>
                    <a id="gurusLink" href="/windows/index.html">guru board</a>
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
    <script src="rotating-text/rotating-text.js"></script>

  </body>
</html>