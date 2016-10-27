<?php
if ($_SERVER)["REQUEST_METHOD"] == "POST" {
  $vendor = $_SESSION["vendorSelected"];
  $deadline = $_SESSION["deadline"];
  $recipient = $_SESSION["recipientSelected"];
  $template = $_SESSION['template'];
  $custom = $_SESSION['customText'];
  $message =$_SESSION['message'];

  

  echo "<pre>";
  $email_body = "";
  $email_body .= "Vendor: " . $vendor;
  $email_body .= "Deadline: " . $deadline;
  $email_body .= "Recipient: " . $recipient . '<br>';
  $email_body .= "Questionnaire Template: " . $template;
  $email_body .= "Introduction: " . $custom;
  $email_body .= "Special Message: " . $message;
  echo $email_body;
  echo "</pre>";

//TO DO: SEND email

header("location:sent.php");
