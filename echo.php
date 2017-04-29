<?php 

echo '<html>
      	<head>
<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat|Roboto");
body{
      text-align: center;
      padding: 0% 20% 0 20%;
      font-family: "Montserrat", sans-serif;
      position: relative;
      z-index: 1
      background-color: #254196;
      color:#495063;
}
#image{
      position: absolute;
      left: 0;
      top:0;
      opacity:0.25;
      z-index: 2
      height:100%;
}
#background-image{
      width: 100%;
      height: 100%;
      position: absolute
      z-index: 4


}
#thank-you {
      font-size: 2.1rem;
      padding-top: 28%
}

#received{
      font-size: 1.3rem;
}

#redirect{
      font-size: 1.3rem;
}

@media (max-width:576px){

#thank-you {
      font-size: 5.5rem;
      margin-top: 58%
}

#received{
      font-size: 2.1rem;
}

#redirect{
      font-size: 2.1rem;
}

}

      
</style>

            </head>
      	<body>
      		<img id="image" style="width:100%; height:100%;"src="Images/cover-thankyou.png">
      		<div id="background-image"> 
      			<h1 id="thank-you">Thank you.</h1>
      			<p id="received">We have received your mobile number and our team will get in touch with you shortly.</p>
      			<p id="redirect">You will be redirected to the website in 4 seconds......</p>
      		</div>
      	</body>
      </html> ';