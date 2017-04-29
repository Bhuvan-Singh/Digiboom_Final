<?php

//Connecting to database 
include 'connect_mobile.php';

// Number posted by the user
$mobile_number = $_POST['userNumber'];

$body = '<b>A new request has been received from:</b> '.$mobile_number;
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Bhuvan_Singh' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


if(empty($mobile_number) or (! is_numeric($mobile_number)) or (strlen($mobile_number)<10)){
      echo 'Please enter valid 10 digit  mobile number';
}

else {

      //Query to insert the number into the table in the database
      $sql = "INSERT INTO mobile_data(mobile_number)  VALUES ('$mobile_number')";
      $result = mysqli_query($conn,$sql);
      //Calling the mail function
      mail("bhuvansingh206@gmail.com","New phone call request received",$body,$headers);

      //To check if the query and connection were successful or not
      if(! $result){
      	echo "The sever failed to send the message. Please try again later";
      }

      //Mailing the number code goes here 

      //To check if the mailwast sent successfully or not
      if(!mail("bhuvansingh206@gmail.com","New phone call request received",$body,$headers)){
      	echo 'The messgae was not send. Please try again later';
      }
      else{
            echo "success";
      	}
}
      



