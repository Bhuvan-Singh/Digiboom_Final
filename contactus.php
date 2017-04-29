<!DOCTYPE html>
<html>
  <head>
    <title>Digiboom | Digital Marketing Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="CSS/contactus.css">
    <link rel="stylesheet" href="CSS/phpStyle.css">
  </head>
  <body>
    <div id="floating-menu" class="lg-hidden md-hidden sm-hidden col-xs-10">
      <div id="hide-menu-button" class="col-sm-2 col-xs-3"></div><a href="index.php" id="home" class="col-sm-12 col-xs-12">Home</a><a href="about.php" id="about" class="col-sm-12 col-xs-12">About</a><a href="contactus.php" id="contact" class="col-sm-12 col-xs-12">Contact Us</a>
      <div id="copyrights" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4>2016 All rights reserved @ DigiBoom  Digital marketing solutions.</h4>
      </div>
    </div>
    <input type="checkbox" id="menu-visible" class="lg-hidden md-hidden sm-hidden xs-hidden">
    <div id="landscape-mode" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        Apologies but we dont support landscape view as of now. Please switch back to portrait view.
        Sorry for the incovinience 
      </div>
    </div>
    <header class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="header-background" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
      <div id="header-content-holder" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="logo" class="col-lg-7 col-md-7 col-sm-6 xs-hidden"><a href="index.php" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="Images/logosolocircle.png" width="50px" height="50px" class="col-lg-1 col-md-1 col-sm-2 col-xs-12"><span id="main">DIGIBOOM </span><br><span id="sub">Digital Marketing Soutions</span></a></div>
          <div id="menu" class="col-lg-5 col-md-5 col-sm-6 xs-hidden"><a href="index.php" id="home" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Home</a><a href="about.php" id="about" class="col-lg-3 col-md-3 col-sm-3 col-xs-3">About</a><a href="contactus.php" id="contact" class="col-lg-3 col-md-3 col-sm-4 col-xs-3"> 
              <p>Contact Us</p></a></div>
          <div id="responsivenav" class="lg-hidden md-hidden sm-hidden col-xs-12"><a href="index.php" id="logo" class="col-xs-4"></a>
            <label for="menu-visible" onclick="hiddenmenu()" id="menu-button" class="col-xs-3"></label>
          </div>
        </nav>
      </div>
    </header>
    <div id="contactUsPopUp-map" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
    <div id="contactUsPopUp" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="contact-heading-float" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      <div id="contact-heading-float-content">
        <h3>Get in touch </h3>
        <h5>Our team will reply to your mail ASAP</h5>
      </div>
      <div id="contactUsPopUp-main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="contactUsPopUp-main-holder" class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
          <div id="contactUsPopUp-main-left" class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div id="contactUsPopUp-main-left-content-holder" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="contactUsPopUp-address-holder" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="contactUsPopUp-address-holder-icon" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                <div id="contactUsPopUp-address-holder-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a>DigiBoom | Digital Marketing Solutions </a><br>info@digiboom.co.in<br>digiboominfo@gmail.com<br>+91 8700253947</br>
                  <div class="address address-delhi col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3> Delhi Address </h3>
                    803, Pragati Tower<br>
                    26,Rajendra Place<br>
                    New Delhi,India<br>
                  </div>
                  <div class="address col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3> Chandigarh Address </h3>
                    3611, Ground Floor<br>
                    Sector 35-D<br>
                    Chandigarh,India<br>
                  </div>



                </div>
                  
              </div>
            </div>
          </div>
          <div id="contactUsPopUp-main-right" class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div id="contactUsPopUp-main-right-content-holder" class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
              <div id="form-holder-heading" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>Send us an enquiry mail.</h3>
              </div>

              <form name="enquireaboutservices" onsubmit="submitForm(); return false;" id="enquireaboutservices" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <div id="name" class="input-container col-lg-11 col-md-11 col-sm-11 col-xs-11"> 
                  <div id="name-image" class="input-image col-lg-2 col-md-2 col-sm-2 col-xs-2"> </div>
                  <input type="text" name="name" placeholder="Your name"  id="yourName" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                </div>
                

                <div id="email" class="input-container col-lg-11 col-md-11 col-sm-11 col-xs-11">
                  <div id="email-image" class="input-image col-lg-2 col-md-2 col-sm-2 col-xs-2"> </div>
                  <input type="email" name="email" placeholder="Your Email Id"  id="yourEmail" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                </div>
                <div id="subject" class="input-container col-lg-11 col-md-11 col-sm-11 col-xs-11">
                  <div id="subject-image" class="input-image col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                  <input type="text" name="subject" placeholder="Subject of enquiry"  id="yourSubject" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                </div>
                <div id="message" class="input-container col-lg-11 col-md-11 col-sm-11 col-xs-11"> 
                  <div id="message-image" class="input-image col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                  <textarea name="message" placeholder="Your message . . ."  id="yourMessage" class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></textarea>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" id="status"></div>
                <input type="submit" name="SubmitEnquiryForm" id="submitEnquiryMail" class="col-lg-6 col-md-6 col-sm-11 col-xs-11" value="SUBMIT">
    
                
              </form>

            </div>
          </div>
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
    </div><a href="https://www.facebook.com/digiboom1" target="_blank">
      <div id="facebook"></div></a><a href="https://goo.gl/lAfhX2" target="_blank">
      <div id="googleplus"></div></a>
    <script src="JS/script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKTBNoOpm7jUOHQfAgJNxZ25gU3pHP_EU&amp;callback=initMap"></script>
    <script>
      function initMap() {
      	var uluru = {lat: 28.6550, lng: 77.1809};
      	var map = new google.maps.Map(document.getElementById('contactUsPopUp-map'), { 
      		zoom: 2,
      		center: uluru
      	});
      	var marker = new google.maps.Marker({
      		position: uluru,
      		map: map
      	});
      }
    </script>
  </body>
</html>