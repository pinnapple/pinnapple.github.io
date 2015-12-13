<?php

$EmailFrom = " *put your server email here* ";
$EmailTo = " *put your own email here* ";
$Subject = "Contact Form Submission";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

if ($success){
  die($output);
}
else{
  die($output);
};

?>
