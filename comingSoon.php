<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sorry</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- This page's style sheet -->
    <link href="styles/proof.css" rel="stylesheet">

    <!-- Lato font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:black,light,400,900" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  </head>


  <body>



    <style type="text/css">
      

      /* Base Styles
      ********************************************************************* */
      html {
        font-size: 62.5%;
      }
      body {
        font-size: 1.5em;
        line-height: 1.6;
        font-weight: 400;
        /*font-family: 'Open Sans', Helvetica, Arial, sans-serif;*/
        font-family: 'Lato', sans-serif, Helvetica, Arial;
        color: #555;
        margin: 0px;
      }
      /* Grid
      ********************************************************************* */  
      .container {
        position: relative;
        width: 100%;
        max-width: 960px;
        margin: 0 auto;
        padding: 0 20px;
        box-sizing: border-box;
      }
      .column, .columns {
        width: 100%;
        float: left;
        box-sizing: border-box;
      }

      /* Effect 1: Bracket Buttons */
      .cl-effect-1 {
        float: right;
        margin-top: 1%;
        margin-right: 2%;
        position: relative;
        z-index: 100;
      }

      .cl-effect-1 a {
        color: white;
        text-decoration: none;
        /*font-weight: bold;*/

      }

      .cl-effect-1 a::before,
      .cl-effect-1 a::after {
        display: inline-block;
        opacity: 0;
        -webkit-transition: -webkit-transform 0.3s, opacity 0.2s;
        -moz-transition: -moz-transform 0.3s, opacity 0.2s;
        transition: transform 0.3s, opacity 0.2s;
        color: white;
      }

      .cl-effect-1 a::before {
        margin-right: 10px;
        content: '[';
        -webkit-transform: translateX(20px);
        -moz-transform: translateX(20px);
        transform: translateX(20px);


      }

      .cl-effect-1 a::after {
        margin-left: 10px;
        content: ']';
        -webkit-transform: translateX(-20px);
        -moz-transform: translateX(-20px);
        transform: translateX(-20px);
      }

      .cl-effect-1 a:hover::before,
      .cl-effect-1 a:hover::after,
      .cl-effect-1 a:focus::before,
      .cl-effect-1 a:focus::after {
        opacity: 1;
        -webkit-transform: translateX(0px);
        -moz-transform: translateX(0px);
        transform: translateX(0px);
      }
      /* ----------------------------------------------------*/

      /* For devices larger than 400px */
      @media (min-width: 400px) {
      .container {
        width: 85%;
        padding: 0;
      }
      }

      /* For devices larger than 550px */
      @media (min-width: 550px) {
      .container {
        width: 80%;
      }
      .column,  .columns {
        margin-left: 4%;
      }
      .column:first-child,  .columns:first-child {
        margin-left: 0;
      }
      .one.column,  .one.columns {
        width: 4.66666666667%;
      }
      .two.columns {
        width: 13.3333333333%;
      }
      .three.columns {
        width: 22%;
      }
      .four.columns {
        width: 30.6666666667%;
      }
      .five.columns {
        width: 39.3333333333%;
      }
      .six.columns {
        width: 48%;
      }
      .seven.columns {
        width: 56.6666666667%;
      }
      .eight.columns {
        width: 65.3333333333%;
      }
      .nine.columns {
        width: 74.0%;
      }
      .ten.columns {
        width: 82.6666666667%;
      }
      .eleven.columns {
        width: 91.3333333333%;
      }
      .twelve.columns {
        width: 100%;
        margin-left: 0;
      }
      .one-third.column {
        width: 30.6666666667%;
      }
      .two-thirds.column {
        width: 65.3333333333%;
      }
      .one-half.column {
        width: 48%;
      }
      /* Offsets */
      .offset-by-one.column,  .offset-by-one.columns {
        margin-left: 8.66666666667%;
      }
      .offset-by-two.column,  .offset-by-two.columns {
        margin-left: 17.3333333333%;
      }
      .offset-by-three.column,  .offset-by-three.columns {
        margin-left: 26%;
      }
      .offset-by-four.column,  .offset-by-four.columns {
        margin-left: 34.6666666667%;
      }
      .offset-by-five.column,  .offset-by-five.columns {
        margin-left: 43.3333333333%;
      }
      .offset-by-six.column,  .offset-by-six.columns {
        margin-left: 52%;
      }
      .offset-by-seven.column,  .offset-by-seven.columns {
        margin-left: 60.6666666667%;
      }
      .offset-by-eight.column,  .offset-by-eight.columns {
        margin-left: 69.3333333333%;
      }
      .offset-by-nine.column,  .offset-by-nine.columns {
        margin-left: 78.0%;
      }
      .offset-by-ten.column,  .offset-by-ten.columns {
        margin-left: 86.6666666667%;
      }
      .offset-by-eleven.column,  .offset-by-eleven.columns {
        margin-left: 95.3333333333%;
      }
      .offset-by-one-third.column,  .offset-by-one-third.columns {
        margin-left: 34.6666666667%;
      }
      .offset-by-two-thirds.column,  .offset-by-two-thirds.columns {
        margin-left: 69.3333333333%;
      }
      .offset-by-one-half.column,  .offset-by-one-half.columns {
        margin-left: 52%;
      }
      }
      /* Typography
      ********************************************************************* */
      h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 2rem;
        font-weight: 300;
      }
      h1 {
        font-size: 4.0rem;
        line-height: 1.2;
        letter-spacing: -.1rem;
      }
      h2 {
        font-size: 3.6rem;
        line-height: 1.25;
        letter-spacing: -.1rem;
      }
      h3 {
        font-size: 3.0rem;
        line-height: 1.3;
        letter-spacing: -.1rem;
      }
      h4 {
        font-size: 2.4rem;
        line-height: 1.35;
        letter-spacing: -.08rem;
      }
      h5 {
        font-size: 1.8rem;
        line-height: 1.5;
        letter-spacing: -.05rem;
      }
      h6 {
        font-size: 1.5rem;
        line-height: 1.6;
        letter-spacing: 0;
      }

      /* Larger than phablet */
      @media (min-width: 550px) {
      h1 {
        font-size: 5.0rem;
      }
      h2 {
        font-size: 4.2rem;
      }
      h3 {
        font-size: 3.6rem;
      }
      h4 {
        font-size: 3.0rem;
      }
      h5 {
        font-size: 2.4rem;
      }
      h6 {
        font-size: 1.5rem;
      }
      }
      p {
        margin-top: 0;
      }
      /* Links
      ********************************************************************* */
      a {
        color: #1EAEDB;
      }
      a:hover {
        color: #0FA0CE;
      }
      /* Header Section
      ********************************************************************* */


      #header {
        display: -ms-flexbox;
        display: -webkit-box;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background: #FF6161;
        background: -moz-linear-gradient(-45deg, #1D3D5D 0%, #C05A24 100%);
        background: -webkit-linear-gradient(-45deg, #1D3D5D 0%, #C05A24 100%);
        background: linear-gradient(135deg, #1D3D5D 0%, #C05A24 100%);
       filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e55d87', endColorstr='#5fc3e4', GradientType=1 );
      }

      #header-xs {
        display: -ms-flexbox;
        display: -webkit-box;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background: #FF6161;
        background: -moz-linear-gradient(-45deg, #1D3D5D 0%, #C05A24 100%);
        background: -webkit-linear-gradient(-45deg, #1D3D5D 0%, #C05A24 100%);
        background: linear-gradient(135deg, #1D3D5D 0%, #C05A24 100%);
       filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e55d87', endColorstr='#5fc3e4', GradientType=1 );
      }

      

      @media only screen and (max-width: 766px) {
      .mobile-toggle {
        display: block;
      }
      }
      .mobile-toggle span {
        width: 30px;
        height: 4px;
        margin-bottom: 6px;
        background: white;
        display: block;
      }
      .scroll-down {
        position: absolute;
        left: 50%;
        bottom: 5vh;
        display: block;
        text-align: center;
        font-size: 20px;
        z-index: 100;
        text-decoration: none;
        text-shadow: 0;
        width: 13px;
        height: 13px;
        border-bottom: 2px solid #fff;
        border-right: 2px solid #fff;
        z-index: 9;
        -webkit-transform: translate(-50%, 0%) rotate(45deg);
        -moz-transform: translate(-50%, 0%) rotate(45deg);
        transform: translate(-50%, 0%) rotate(45deg);
        -webkit-animation: fade_move_down 2s ease-in-out infinite;
        -moz-animation: fade_move_down 2s ease-in-out infinite;
        animation: fade_move_down 2s ease-in-out infinite;
      }


      /*animated scroll arrow animation*/
      @-webkit-keyframes fade_move_down {
       0% {
      -webkit-transform:translate(0, -10px) rotate(45deg);
      opacity: 0;
      }
       50% {
      opacity: 1;
      }
       100% {
      -webkit-transform:translate(0, 10px) rotate(45deg);
      opacity: 0;
      }
      }
      @-moz-keyframes fade_move_down {
       0% {
      -moz-transform:translate(0, -10px) rotate(45deg);
      opacity: 0;
      }
       50% {
      opacity: 1;
      }
       100% {
      -moz-transform:translate(0, 10px) rotate(45deg);
      opacity: 0;
      }
      }
      @keyframes fade_move_down {
       0% {
      transform:translate(0, -10px) rotate(45deg);
      opacity: 0;
      }
       50% {
      opacity: 1;
      }
       100% {
      transform:translate(0, 10px) rotate(45deg);
      opacity: 0;
      }
      }




      .title {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        padding: 2rem;
        max-width: 960px;
        text-align: center;
        margin-top: 10%;


      }

      .title-xs {
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        padding: 2rem;
        max-width: 960px;
        text-align: center;
        margin-top: 0%;
      }

      .title .smallsep {
        background: #fff;
        height: 2px;
        width: 70px;
        margin: auto;
        margin-top: 30px;
        margin-bottom: 30px;
      }
      .title-xs .smallsep-xs {
        background: #fff;
        height: 2px;
        width: 70px;
        margin: auto;
        margin-top: 30%;
        margin-bottom: 30px;
      }
      .title h1 {
        font-size: 60px;
        font-weight: 300;
        /*text-transform: uppercase;*/
        line-height: 0.85;
        margin-bottom: 28px;
        margin: 0;
        padding: 0;
        color: #FFFFFF;
      }

      .title-xs h1 {
        font-size: 40px;
        font-weight: 100;
        /*text-transform: uppercase;*/
        line-height: 0.95;
        margin-bottom: 28px;
        margin-top: 0%;
        padding: 0;
        color: #FFFFFF;
      }
      .title h2 {
        color: #FFFFFF;
        font-size: 16px;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 5px;
        margin-top: 50px;
      }

      .title-xs h2 {
        color: #FFFFFF;
        font-size: 16px;
        font-weight: 100;
        text-transform: uppercase;
        letter-spacing: 5px;
        margin-top: 0px;
      }

      @media only screen and (max-height: 700px) {
      .title h1 {
        font-size: 80px;
      }
      }
      .title p {
        max-width: 600px;
        margin: 0 auto;
        line-height: 150%;
      }

      @media only screen and (max-width: 500px) {
      .title h1 {
        font-size: 65px;
      }
      }
      .title .icon {
        color: #FFFFFF;
        font-size: 50px;
      }
      .main_nav {
        position: fixed;
        top: 0px;
        max-height: 50px;
        z-index: 999;
        width: 100%;
        padding-top: 17px;
        background: none;
        overflow: hidden;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        opacity: 0;
        top: -100px;
        padding-bottom: 6px;
      }

      @media only screen and (max-width: 766px) {
      .main_nav {
        padding-top: 25px;
      }
      }
      .open-nav {
        max-height: 400px !important;
      }
      .sticky {
        background-color: #1D3D5D;
        opacity: 1;
        top: 0px;
      }
      nav {
        width: 100%;
        margin-top: 0px;
      }

      @media only screen and (max-width: 766px) {
      nav {
        width: 100%;
      }
      }
      nav ul {
        list-style: none;
        overflow: hidden;
        text-align: center;
      }

      @media only screen and (max-width: 766px) {
      nav ul {
        padding-top: 0px;
        margin-bottom: 22px;
        text-align: center;
        width: 100%;
      }
      }
      nav ul li {
        display: inline-block;
        margin-left: 35px;
        line-height: 1.5;
        letter-spacing: 1px;
      }

      @media only screen and (max-width: 766px) {
      nav ul li {
        width: 100%;
        padding: 7px 0;
        margin: 0;
      }
      nav ul li:first-child {
        margin-top: 70px;
      }
      }
      nav ul a {
        text-transform: uppercase;
        font-size: 12px;
        text-decoration: none;
        color: white;
      }
      nav ul a:hover {
        color: #C05A24;
      }
      .mobile-toggle {
        display: none;
        cursor: pointer;
        font-size: 20px;
        position: absolute;
        right: 22px;
        top: 0;
        width: 30px;
        color: white;
      }

      h4 {
        color: white;
      }


    </style>



    <!-- Header Section
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header id="header">

      <div class="title">

        <h1 class="heading"> Coming Soon </h1>

        <div class="smallsep heading"></div>

        <h4></h4>
        <!-- <h4>Click below if you want Coil at your school this Fall</h4> -->
      </div>
 
    </header>

    
      
    
 
    <!--</div>  container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="lib/proof.js"></script>
  </body>


</html>