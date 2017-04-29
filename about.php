<?php 
include "connect.php";





?>



<!DOCTYPE html>
<html>
  <head>
    <title>Digiboom | Digital Marketing Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="CSS/about.css">
  </head>
  <body>
    <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="header-background" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
      <div id="header-graphics" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      <div id="header-graphics-back" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      <div id="header-content-holder" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <nav class="col-lg-12 col-md-12 col-sm-12 xs-hidden">
          <div id="logo" class="col-lg-7 col-md-7 col-sm-6 col-xs-12"><a href="index.php" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="Images/logosolocircle.png" width="50px" height="50px" class="col-lg-1 col-md-1 col-sm-2 col-xs-12"><span id="main">DIGIBOOM </span><br><span id="sub">Digital Marketing Soutions</span></a></div>
          <div id="menu" class="col-lg-5 col-md-5 col-sm-6 col-xs-12"><a href="index.php" id="home" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Home</a><a href="about.php" id="about" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">About</a><a href="contactus.php" id="contact" class="col-lg-3 col-md-3 col-sm-4 col-xs-3"> 
              <p>Contact Us</p></a></div>
        </nav>
        <div id="responsivenav" class="lg-hidden md-hidden sm-hidden col-xs-12"><a href="index.php">
            <div id="logo" class="col-sm-2 col-xs-4"></div></a>
          <label for="menu-visible" onclick="hiddenmenu()" id="menu-button" class="col-sm-2 col-xs-3">	</label>
        </div>
        <div id="header-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="written-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 id="main-heading">Digital India Forward</h3><br>
            <h5 id="sub-heading">Making Results</h5>
          </div>
        </div>
      </div>
    </header>
    <div id="about-us-holder" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="about-us-heading" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1>About Us</h1>
      </div>
      <div id="about-us-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </p>
        <h3 class="subheading-aboutus">Digi Boom is a digital marketing solutions company.  </h3>
        <Br>Online publishers in-house teams are expensive for the ROI they provide. Managing Ad network is not a core business function and it is not easy for publishers to monetize online traffic.</Br>
        <Br>We as Publisher's website network build revenue.Our service promises revenues and expert team support in maximizing digital monetization. </Br><br>
        <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
          <h3>Additional Services </h3><br>◉ Web design<br>◉ Development and maintenance<br>◉ End to end digital service management
        </p>
      </div>
      <!-- <div id="monetize" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="monetize-heading" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2>Core Area of Operation - "Monetization"</h2>
        </div>
        <div id="monetize-blocks" class="col-lg-11 col-md-11 col-sm-10 col-xs-11">
          <div id="monetize-block-1" class="monetize-block-class col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div id="monetize-image-one" class="monetixe-block-image col-lg-12 col-md-12 col-sm-6 col-xs-4"></div>
            <div class="monetize-block-content monetize-block-content-one col-lg-12 col-md-12 col-sm-6 col-xs-8"> 
              <h2>Monetize </h2>We monetize impressions by showing different types of ads.
            </div>
          </div>
          <div id="monetize-block-2" class="monetize-block-class col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div id="monetize-image-two" class="monetixe-block-image col-lg-12 col-md-12 col-sm-6 col-xs-4"></div>
            <div class="monetize-block-content monetize-block-content-two col-lg-12 col-md-12 col-sm-6 col-xs-8">
              <h2>Aggregators </h2>Large opportunity for the online publishers to add directly to their bottom line which allows our team to focus on core sales.
            </div>
          </div>
          <div id="monetize-block-2" class="monetize-block-class col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div id="monetize-image-three" class="monetixe-block-image col-lg-12 col-md-12 col-sm-6 col-xs-4"></div>
            <div class="monetize-block-content monetize-block-content-three col-lg-12 col-md-12 col-sm-6 col-xs-8"> 
              <h2>Right Audience </h2>Large opportunity for the advertisers to connect and match with the right audience.
            </div>
          </div>
        </div>
      </div> -->
      <div id="our-team" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="our-team-heading" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2>Meet Our Team</h2>
        </div>
        <div id="our-team-tile-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="team-member-one" class="team-member col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div id="team-member-image-one" class="team-member-image col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            <div id="team-member-info-one" class="team-member-info col-lg-7 col-md-7 col-sm-7 col-xs-7"><span class="member-name">Rohan </span><br>B.Tech<br>Google AdWords Display Certified.<br>Google Analytics Certified<br>Business Head<br>Publisher Business Development</div>
          </div>
          <div id="team-member-two" class="team-member col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div id="team-member-image-two" class="team-member-image col-lg-5 col-md-5 col-sm-5 col-xs-4"></div>
            <div id="team-member-info-two" class="team-member-info col-lg-7 col-md-7 col-sm-7 col-xs-7"><span class="member-name">Bhuvan Singh </span><br>B.Tech<br>Web Head<br>Development and Maintenance</div>
          </div>
        </div>
      </div>
    </div>
    <div id="floating-menu" class="lg-hidden md-hidden sm-hidden col-xs-10">
      <div id="hide-menu-button" class="col-sm-2 col-xs-3"></div><a href="index.php" id="home" class="col-sm-12 col-xs-12">Home</a><a href="about.php" id="about" class="col-sm-12 col-xs-12">About</a><a href="contactus.php" id="contact" class="col-sm-12 col-xs-12">Contact Us</a>
      <div id="copyrights" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4>2016 All rights reserved @ DigiBoom  Digital marketing solutions.</h4>
      </div>
    </div>
    <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="logo-image-container" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div id="logo-background" class="col-lg-12 col-md-12 col-sm-12 xs-hidden"></div>
        <div id="logo-image" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      </div>
      <div id="menu-options" class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><a href="index.php" id="footer-home" class="col-lg-2 col-md-2 col-sm-3 col-xs-3">Home</a><a href="about.php" id="footer-about" class="col-lg-2 col-md-2 col-sm-3 col-xs-3">About</a><a href="contactus.php" id="footer-contact" class="col-lg-2 col-md-2 col-sm-3 col-xs-3">Contact</a></div>
      <div id="copyrights" class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h4>2016 All rights reserved @ DigiBoom | Digital marketing solutions.</h4>
      </div>
      <div id="designedby" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h5>Website designed and developed with 💖 by <a href="#">Bhuvan Singh.</a></h5>
      </div>
    </footer>
    <input type="checkbox" id="menu-visible" class="lg-hidden md-hidden sm-hidden xs-hidden"><a href="https://www.facebook.com/digiboom1" target="_blank">
      <div id="facebook"></div></a><a href="https://goo.gl/lAfhX2" target="_blank">
      <div id="googleplus"></div></a>
    <div id="landscape-mode" class="col-sm-12 col-xs-12">
      <div id="img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        Apologies but we dont support landscape view as of now. Please switch back to portrait view.
        Sorry for the incovinience 
      </div>
    </div>
    <script src="JS/aboutscript.js"></script>
  </body>
</html>