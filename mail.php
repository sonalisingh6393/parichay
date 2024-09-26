<?php
//get data from form  
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Note = $_POST['Note'];


$to = "bhumika.26@gmail.com";
$subject = "Contact Us";


$txt ="Name = ". $Name . "\r\n  Mobile Number = " . $Mobile . "\r\n  Email id = " . $Email . "\r\n  
Note = " . $Note ;
$headers = "bhumika.26@gmail.com";
if($Mobile!=NULL){
    mail($to,$Note,$txt,$headers);
}
//redirect
header("Location:index.html");
?>