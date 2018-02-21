 
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    //echo"\n $nameErr";
  } else {
    $name = ($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    //echo  "\n $nameErr";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    //echo nl2br ("\n $emailErr");
  } else {
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
     // echo nl2br ("\n $emailErr"); 
    }
  }
  if (empty($_POST["phonenumber"])) {
    $phonenumberErr = "phone number is required";
    //echo nl2br ("\n $phonenumberErr"); 
  } else {
    $phonenumber = ($_POST["phonenumber"]);
    if (!preg_match("/^[0-9]{10}+$/",$phonenumber)) {
      $phonenumberErr = "Invalid Phone number"; 
      //echo nl2br ("\n $phonenumberErr"); 
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "website is required";
    //echo nl2br ("\n $websiteErr"); 
  } else {
    $website = ($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
      //echo nl2br ("\n $websiteErr"); 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = ($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    //echo nl2br ("\n $genderErr"); 
  } else {
    $gender =($_POST["gender"]);
  }
}

?>
