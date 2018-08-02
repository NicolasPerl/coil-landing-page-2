<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Coil</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="lib/typed.min.js" type="text/javascript"></script>
    <script src="lib/modernizr.custom.js"></script>
    <!-- This page's style sheet -->
    <link href="styles/index.css" rel="stylesheet">
    <!-- Mobile Friendly-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon in tab-->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:black,400,900" rel="stylesheet">

  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
        	<div class="col-6">
	        	<img src="images/landing-page-logo.png" id="landing-page-logo" alt="coil logo">
        		
        	</div>
        	<div class="col-6">
        		<!-- <div class="loginButtons"> -->
                    <nav class="cl-effect-1">
                        <a href="http://www.coilapp.com/">login</a>
                        <a href="http://www.coilapp.com/sign-up">signup</a>
                    </nav>
        	</div>
                
                    <!--
                    <a class="button" href="#" id="loginButton"><strong>login</strong></a>     
                    <a class="button" href="#" id="signupButton"><strong>signup</strong></a>-->
                <!-- </div> -->
        </div> <!-- end row -->
        <div class="row">
        	<div class="col">
        		<img id='splashImage'src="images/isometric-work-together.png">
        	</div>
        	<!-- <div class="splashImage">
        		
        	</div> -->
        	<div class="col">
        		<h3 id="splashHeader">Classroom communication software for the 21 century</h3>
        		<p id="splashText">A tool for classrooms to collaborate, announce, meet, and grow together</p>
        		<!-- call to action button -->
                <center><a href="http://www.coilapp.com/sign-up" id="productButtonXS" class="btn btn-default btn-lg"><strong>Get started</strong></a></center>
        	</div>
        </div> <!-- end row -->

        <!-- circle layed over greenblock -->
        <div class="row">
        	<!-- <div class="circleBase type1">
        		<p id="circleText">Imagine reducing workload but increasing engagement</p>
        	</div> -->
        	
        	<div id="greenBlock" class="col">
        		<div class="circle">
        			<p id="circleText">Imagine reducing <br /> workload but increasing engagement</p>
        			<p id="circleTextSmall">sounds crazy... we know</p>
        		</div>
        		<h3 id="greenBlockText">Coil is free, easy to use, and only takes minutes to set up. But, what makes Coil different?</h3>
        	</div>
        </div> <!-- end row -->

        <h2 class="carouselHeader">We'll handle the hard part</h2>

        
        


<!-- carousel starts here -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
				<div class="row">
<!-- first slide-->
        	<div class="col-4" style="display:inherit;">
				<img data-target="#carouselExampleIndicators" data-slide-to="0" class="emojiCarousel"border="0" alt="microphone" src="images/microphone.png">
				<p class="carsouselIconText">Dynamic Feed</p>
        	</div>
<!-- second slide-->
        	<div class="col-4" style="display:inherit;">
				<img data-target="#carouselExampleIndicators" data-slide-to="1" class="emojiCarousel"border="0" alt="microphone" src="images/raisingHandEmoji.png">
				<p class="carsouselIconText">Participation</p>
        	</div>
<!-- third slide-->
        	<div class="col-4" style="display:inherit;">
				<img data-target="#carouselExampleIndicators" data-slide-to="2" class="emojiCarousel"border="0" alt="microphone" src="images/wrenchEmoji.png">
				<p class="carsouselIconText">Tools Provided</p>
        	</div>
        </div> <!-- end row -->
			</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div id="slide1"class="row">
					<div class="col-6">
					<img class="d-block" src="images/filter-posts.gif" alt="First slide">
					<!-- ?auto=yes&bg=777&fg=555&text=First slide -->
				</div>
				<div class="col-6">
					<h3>All conversation kept in one place</h3>
					<p class="carouselText">Easily filter unsolved questions, endorse answers, and upload files. Students can choose to post only to educators, and all the contributions to your coil group are archived so there is never a lost post.</p>
				</div>
				</div>
				
			  
			</div>
		<div class="carousel-item">
		  <div id="slide2" class="row">
					<div class="col-6">
					<img class="d-block" src="images/leaderboard-reward.png" alt="First slide">
				</div>
				<div class="col-6">
					<h3>A reward from us to you</h3>
					<p class="carouselText">With the help of our partners _______,_____, and _____ Coil provides scholarships to the highest achievers in the class. Our algorithm rewards the students that are participating, engaging, and helping in class the most. These students usually end up being your next teaching assistant. <br /><br />  Coil believes in rewarding the students with the highest participation and values_____.</p>
				</div>
				</div>
		</div>
		<div class="carousel-item">
		  <div id="slide3" class="row">
					<div class="col-6">
					<img class="d-block" src="images/tools.png" alt="First slide">
				</div>
				<div class="col-6">
					<h3>Collaboration comes in all shapes and sizes</h3>
					<p class="carouselText">We’ll provide the tools to get your point accross. Whether you need to embed code, math equations, or docs we’ll handle it.</p>
				</div>
				</div>
		</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
<!-- carousel ends here -->

<!-- feature icons -->
		<h2 class="carouselHeader">Coil is built for educators and learners to work together</h2>
		<div class="row ">
			<div class="col-12 feature-icons-all">
				<div class="child">
					<img class="feature-icons" src="images/analytics-icon.png">	
					<p class="feature-icons-text">Analytics</p>
				</div>
				<div class="child">
					<img class="feature-icons" src="images/atom-icon.png">	
					<p class="feature-icons-text">Create study groups</p>
				</div>
				<div class="child">
					<img class="feature-icons" src="images/telescope-icon.png">
					<p class="feature-icons-text">Request for 1-on-1</p>
				</div>
				<div class="child">
					<img class="feature-icons" src="images/highlighter-icon.png">
					<p class="feature-icons-text">Ask questions</p>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-12 feature-icons-all">
				<div class="child">
					<img class="feature-icons" src="images/medal-icon.png">	
					<p class="feature-icons-text">Scholarship provided for every class</p>
				</div>
				<div class="child">
					<img class="feature-icons" src="images/certificate-icon.png">	
					<p class="feature-icons-text">Create study groups</p>
				</div>
				<div class="child">
					<img class="feature-icons" src="images/computer-icon.png">
					<p class="feature-icons-text">Insert code blocks</p>
				</div>
				<div class="child">
					<img class="feature-icons" src="images/google-docs-icon.png">
					<p class="feature-icons-text">Embed Google docs</p>
				</div>
			</div>
		</div>
<!-- feature icons ends here -->

<!-- video loops start here -->
		<div class="video-loops">
			<h3 class="video-headers">Help is at your finger tips</h3>
			<img src="images/triangle-background.png" style="width: 100%;">
<!-- request 1-on-1 video loop -->
			<div class="row">
				<div class="col-6">
				<img class="video-container"src="images/request-1on1-video.gif">
				</div>
				<div class="col-6">
					<img class="video-icons"src="images/video-loop-icon.svg">
					<p class="video-loop-text">Students get confused - It’s inevitable. Thankfully, there are classmates that understand what's going on and Coil will connect you to them. Students receive the help they need while their classmates gain a deeper understanding of the material after explaining it. This is backed up by the Feynman technique - the guy who won the Nobel Prize in Physics.</p>
				</div>
			</div>
<!--create a coil video loop -->
			<h3 style="text-align: center;margin-top: 50px;">coils* bring classes together</h3>
			<div class="row" style="margin-top: 75px;">
				<div class="col-6">
					<img class="video-icons"src="images/video-loop-icon-book.svg">
					<p class="video-loop-text">At Coil, we know that studying with classmates, especially in person, is the most effective way to learn. Coil lets you create a coil - our word for study group - that classmates or educators can join. Whether it's to study for an upcoming test or to simply review material, a coil is where great minds come together to collaborate and educate each other.</p>
				</div>
				<div class="col-6">
				<img class="video-container"src="images/create-studygroup-video.gif">
				</div>			
			</div>
			<img src="images/half-circle.png" style="width:100%; height: 150px;">

<!-- analytics video loop -->
			<!-- <h3 id="analytics-header">Analytics you care about</h3>
			<p class="video-loop-text">Coil's analytics help professors make decisions for the better</p>
			<img id="analytics-video-loop" src="images/blank-desktop.png">
			<img src="images/analytics-video.gif"> -->
			<div class="container">
				<h3 id="analytics-header">Analytics you care about</h3>
				<p class="video-loop-text">Coil's analytics help professors make decisions for the better</p>
			  <div class="row">
			    <div class="col-sm-12">
			      <div class="desktop-wrapper">
			        <img width="560" height="315" src="images/analytics-video.gif" allowfullscreen>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
<!-- video loops end here -->
		
<!-- request demo starts here -->
		<div class="request-demo-div">
			<h4 id="request-demo-text">Request a demo</h4>
			<form name="web_form" id="web_form" method="post" action="process-form-data.php">
        		<p class="form-processing"><label>Enter name: </label><input type="text" name="name" id="name" /></p>
        		<p class="form-processing"><label>Enter email: </label><input type="text" name="email" id="email" /></p>
        		<!-- <button type="submit">
					<img src="images/submit.png" />
				</button> -->
				<nav style="text-align: center;"class="cl-effect-2">
					<a id="linkeffects" type="submit"><span data-hover="Submit">Submit</span></a>
				</nav>
			</form>
		</div>
                <!-- typed.js injection -->
                <!-- <div class="type-wrap">
                    <div id="typed-strings">
                        <h1>Collaborate with your <strong>classmates</strong></h1>
                        <h1>Or get <strong>tutored</strong> by them.</h1>
                    </div>
                    <span id="typed"></span>
                </div> -->
                <!-- typed.js ends here -->
              
                 
                <!-- typed.js script -->
                <script>
                    var typed = new Typed('#typed', {
                    stringsElement: '#typed-strings',
                    typeSpeed: 40,
                    loop: true,
                    backDelay: 900,
                    startDelay: 1000,
                    showCursor: true,
                    backSpeed: 20,
                    });
                </script>
                <!--typed.js ends here -->
            <!-- </div> -->
        </div>

    <footer>
        <div class="row" id="footerRow">
            <div class="col-sm-4">
                <center><p id="usingCoilFooter" class="footerTitles"> using coil</p>
                <div class="footerLinks">
                    <!-- <a href="/product.php"> product </a><br> -->
                    <a href="proof.php"> prove it </a>
                </div></center>
            </div>
            <div class="col-sm-4">
                <center><span class="glyphicon glyphicon-heart footerTitles" id="coilFooter" aria-hidden="true">coil</span> 
                <div class="footerLinks">
                    <a href="#"> policy </a><br>
                    <a href="mailto:support@coilapp.com?Subject=Hi%20again!" target="_top">contact us</a>
                </div></center>
            </div>
            <div class="col-sm-4">
                <center><p id="handyLinksFooter" class="footerTitles">tool box</p></center>
                <div class="footerLinks">
                    <!-- <a id="toolBox" href="#"> iOS app</a> -->
                    <a id="gurusLink" href="/windows/index.html">guru board</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
   <!-- Including the PointPoint() Plugin -->
    <script src="pointpoint/jquery.pointpoint/transform.js"></script>
    <script src="pointpoint/jquery.pointpoint/jquery.pointpoint.js"></script>
    <!-- The main script file -->
    <script src="pointpoint/js/script.js"></script>    
    <script src="lib/index.js"></script>
  </body>
</html>