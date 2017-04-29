<?php 
include "connect.php";

?>
<!-- mobile form php  -->

<?php 
      if(isset($_POST['submit'])){
        $mobile_number= $_POST['userNumber'];
        
        if(empty($mobile_number) or (!is_numeric($mobile_number)) or (strlen($mobile_number)<10)){
          $mobileMessage = "<h4 style='color: #F25F5C;'>Error! Please enter a valid 10 digit mobile number.</h4>";
        }
        
        //Query to insert the number into the table in the database
        else{

          $sql = "INSERT INTO mobile_data(mobile_number)  VALUES ('$mobile_number')";
          $result = mysqli_query($conn,$sql);
          //Mailing the number code goes here 
          $body = '<b>A new request has been received from:</b> '.$mobile_number;
          $headers =  'MIME-Version: 1.0' . "\r\n"; 
          $headers .= 'From: Bhuvan_Singh' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

          //Calling the mail function
          mail("bhuvansingh206@gmail.com","New phone call request received",$body,$headers);

          //To check if the query and connection were successful or not
          if(! $result){
            die("Connection Failed:".mysqli_error($conn));
          }
          //To check if the mailwast sent successfully or not
          elseif(!mail("bhuvansingh206@gmail.com","New phone call request received",$body,$headers)){
            $mobileMessage = "<h4 style='color:#F25F5C;'>Error! Some error occured please try again.</h4>";
          }
          else {
            $mobileMessage = "<h4  style='color:#5FCE7C ;'>We have received your number. Our team will get in touch with you shortly.</h4>";
          }
          
        }
      }
?>

<!-- form php -->
<?php 
if(isset($_POST['SubmitEnquiryForm'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = nl2br($_POST['message']);

  if(empty($name) or empty($email) or empty($subject) or empty($message)){
      $errorMailMessage = "<h3>This field is required";
  }

  else{
  //Query to insert the details into the table in the database

    $sql = "INSERT INTO query_data (name,email_id,subject,message) VALUES ('$name','$email','$subject','$message')";
    $result = mysqli_query($conn,$sql);

    //To check if the query and connection were successful or not

    if(! $result){
      die("Connection Failed:".mysqli_error($conn));
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Digiboom | Digital Marketing Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/phpStyle.css">
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
          <label for="menu-visible" onclick="hiddenmenu()" id="menu-button" class="col-sm-2 col-xs-3"></label>
        </div>
        <div id="header-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="written-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3 id="main-heading">Let us help your business <span id="grow" >GROW</span></h3><br>
            <h5 id="sub-heading">with our digital marketing solutions</h5>
          </div>
          <!-- <div id="get-mobile" class="col-lg-12 col-md-12 col-sm-11 col-xs-12">

            <form name="mobile-number" method="post" action="index.php" id="mobile-form" class="col-lg-12 col-md-12 col-sm-11 col-xs-12">
              <input name="userNumber" type="text" minlengh="10" maxlength="10" placeholder="Enter your 10 digit mobile number" required id="mobileNumber" class="col-lg-4 col-md-4 col-sm-10 col-xs-11">
              <button name="submit" type="submit" value="Get in touch" id="submit-button" class="col-lg-3 col-md-3 col-sm-10 col-xs-11">Request a call</button>
            </form>
          <div class='col-lg-7 col-md-7 col-sm-12 col-xs-12 send-message'>
            <?php
              global $mobileMessage ;
              //echo "" ;
              echo $mobileMessage ;
              //echo "";
            ?>
          </div>
          </div> -->
        </div>
      </div>
    </header>
    <div id="what-we-do" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="what-we-do-heading" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>What we do ? </h3>
      </div>
      <div id="what-we-do-subheading" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4>Our expert team at DIGIBOOM supports :</br></br> </h4>
        <div class="subheading-container first col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div id="first-image" class="subheading-image col-lg-3 col-md-3 col-sm-3"></div>
          <p class="col-lg-9 col-md-9 col-sm-9"> Online publishers in maximizing digital monetization.</p>
        </div>
        <div class="subheading-container second col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div id="second-image" class="subheading-image col-lg-3 col-md-3 col-sm-3"></div>
          <p class="col-lg-9 col-md-9 col-sm-9">Aggregation of publishers Ad space and sale to advertisers. </p>
        </div>
      </div>
      <div id="what-we-do-subheading" class="lg-hidden md-hidden sm-hidden xs-hidden">
        <h4>Our expert team at DIGIBOOM supports </br></br> </h4>
        <p class="first">Online publishers in maximizing digital monetization</br></p>
        <p class="second">Aggregation of publishers Ad space and sale to advertisers</p>
      </div>
      <div id="page-break" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      <div id="we-can-help-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="we-can-help-background" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        <div id="we-can-help-background-low" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        <div id="we-can-help-content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="we-can-help" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>We can help you with</h3>
          </div>
          <div id="services" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="service-tile-holder" class="col-lg-10 col-md-10 col-sm-11 col-xs-10">
              <div id="aggregator" class="service-tile col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div id="aggregator-image" class="service-image-holder col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
                <div id="content" class="serviceName col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Aggregation of Publishers</h5>
                </div>
              </div>
              <div id="adNetwork" class="service-tile col-lg-3 col-md-3 col-sm-5 col-xs-12"> 
                <div id="adNetwork-image" class="service-image-holder col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
                <div id="content" class="serviceName col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Ad Network</h5>
                </div>
              </div>
              <div id="consultancy" class="service-tile col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div id="consultancy-image" class="service-image-holder col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
                <div id="content" class="serviceName col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Consultancy</h5>
                </div>
              </div>
              <div id="design" class="service-tile col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div id="design-image" class="service-image-holder col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
                <div id="content" class="serviceName col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Design</h5>
                </div>
              </div>
              <div id="seo" class="service-tile col-lg-3 col-md-3 col-sm-5 col-xs-12"> 
                <div id="seo-image" class="service-image-holder col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
                <div id="content" class="serviceName col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Search Engine Optimization</h5>
                </div>
              </div>
              <div id="smo" class="service-tile col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div id="smo-image" class="service-image-holder col-lg-8 col-md-8 col-sm-8 col-xs-12"></div>
                <div id="content" class="serviceName col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Social Media Optimization </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div id="inquire-form" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="form-holder" class="col-lg-12 col-md-12 col-sm-11 col-xs-12">
        <div id="form-holder-heading" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h3>Get in touch.</h3>
        </div>

        <form name="enquireaboutservices" onsubmit="submitForm(); return false;" id="enquireaboutservices" class="col-lg-9 col-md-9 col-sm-11 col-xs-11">
          <div id="name" class="input-container col-lg-5 col-md-5 col-sm-12 col-xs-12" > 
            <div id="name-image" class="input-image col-lg-2 col-md-2 col-sm-2 col-xs-2"> </div>
            <input type="text" name="name" placeholder="Your name"  id="yourName" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
          </div>
          
          <div id="email" class="input-container col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
            <div id="email-image" class="input-image col-lg-2 col-md-2 col-sm-2 col-xs-2"> </div>
            <input type="email" name="email" placeholder="Your Email Id"  id="yourEmail" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
          </div>
          <div id="subject" class="input-container col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
            <div id="subject-image" class="input-image col-lg-1 col-md-1 col-sm-2 col-xs-2"> </div>
            <input type="text" name="subject" placeholder="Subject of enquiry"  id="yourSubject" class="col-lg-11 col-md-11 col-sm-10 col-xs-10">
          </div>
          <div id="message" class="input-container col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
            <div id="message-image" class="input-image col-lg-1 col-md-1 col-sm-2 col-xs-2"></div>
            <textarea name="message" placeholder="Your message . . ."  id="yourMessage" class="col-lg-11 col-md-11 col-sm-10 col-xs-10"></textarea>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" id="status"></div>
          <button type="submit" name="SubmitEnquiryForm" id="submitEnquiryMail" class="col-lg-5 col-md-5 col-sm-6 col-xs-12"> 
            <div id="submitEnquiryMailImage"></div><span>Send Enquiry Mail		</span>
          </button>
        </form>

      </div>
    </div> -->
    <div id="floating-menu" class="lg-hidden md-hidden col-sm-5 col-xs-10">
      <div id="hide-menu-button" class="col-sm-2 col-xs-3"></div><a href="index.php" id="home" class="col-sm-12 col-xs-12">Home</a><a href="about.php" id="about" class="col-sm-12 col-xs-12">About</a><a href="contactus.php" id="contact" class="col-sm-12 col-xs-12">Contact Us</a>
      <div id="copyrights" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4>2016 All rights reserved @ DigiBoom  Digital marketing solutions.</h4>
      </div>
    </div>
    <div id="monetize" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
          <div id="monetize-block-3" class="monetize-block-class col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div id="monetize-image-three" class="monetixe-block-image col-lg-12 col-md-12 col-sm-6 col-xs-4"></div>
            <div class="monetize-block-content monetize-block-content-three col-lg-12 col-md-12 col-sm-6 col-xs-8"> 
              <h2>Right Audience </h2>Large opportunity for the advertisers to connect and match with the right audience.
            </div>
          </div>
        </div>
      </div>
    <div id="get-mobile-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div id="getMobileHeading">Request a Phone Call.<br>
        </div>
        <div id="getMobileSubHeading">Our team will get in touch with you within one business day.</div>
        <div id="get-mobile" class="col-lg-12 col-md-12 col-sm-11 col-xs-12">
        <form name="mobile-number" method="post" onsubmit="submitNumber(); return false;" id="mobile-form" class="col-lg-12 col-md-12 col-sm-11 col-xs-12">
          <input name="userNumber" type="text" minlengh="10" maxlength="10" placeholder="Enter your 10 digit mobile number" required id="mobileNumber" class="col-lg-4 col-md-4 col-sm-10 col-xs-11" display="none">
          <button name="submit" type="submit" value="Get in touch" id="submit-button" class="col-lg-3 col-md-3 col-sm-10 col-xs-11">Request a call</button>

          <div class="col-lg-6 col-md-6 col-sm-10 col-xs-11" id="status"></div>
        </form>
      <!-- <div class='col-lg-7 col-md-7 col-sm-12 col-xs-12 send-message'>
        <?php
          global $mobileMessage ;
          //echo "" ;
          echo $mobileMessage ;
          //echo "";
        ?>
      </div> -->
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
    <div id="landscape-mode" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div id="img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        Apologies but we dont support landscape view as of now. Please switch back to portrait view.
        Sorry for the incovinience 
      </div>
    </div>
    <script src="JS/script.js"></script>
  </body>
</html>