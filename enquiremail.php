<?php

//Connecting to database 

include 'connect.php';

// Details posted by the user

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = nl2br($_POST['message']);

if(empty($name)){ 
      $nameClass= "requiredClass";
} 
// Mail code goes here

              

$body = nl2br("Name:.$name.\n subject:$subject.\n Message: .$message");
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Bhuvan_Singh' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//Calling the mail function





if(empty($name) or empty($email) or empty($subject) or empty($message)){
      echo 'All fields are mandatory. Please fill all details.';
}

else{
//Query to insert the details into the table in the database

      $sql = "INSERT INTO query_data (name,email_id,subject,message) VALUES ('$name','$email','$subject','$message')";
      $result = mysqli_query($conn,$sql);
      mail("bhuvansingh206@gmail.com","New query received",$body,$headers);

//To check if the query and connection were successful or not

      if(! $result){
	     echo "The sever failed to send he message. Please try again later";
      }

      if(!mail("bhuvansingh206@gmail.com","New query received",$body,$headers)){
	     echo 'The messgae was not send. Please try again later';
      }
      else {
            echo "success";
      }

}