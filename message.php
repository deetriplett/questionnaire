<?php session_start();?>
<?php
  if($_POST){
    $_SESSION['template'] = $_POST['template'];
    // echo 'Your vendor selected is: '.$_SESSION['vendorSelected'].'';
    // echo 'Your deadline is: '.$_SESSION['deadline'].'';
    // echo 'The recipient is: '.$_SESSION['recipientSelected'].'';
    // echo 'Your template selected is: '.$_SESSION['template'].'';

$pageTitle ="Custom Message";
$section ="message";

include("inc/header.php");
?>
<div class="container">
  <div class="col-lg-12">
  <ul class="nav nav-pills" id="section-tabs">
    <div class="col-md-3 recip-tab">
    <li class="recip"><a href="questionnaire.php"><span>RECIPIENT</span></a></li>
    </div>
    <div class="col-md-3 temp-tab">
    <li class="templates"><a href="templates.php"><span>TEMPLATES</span></a></li>
    </div>
    <div class="col-md-3 mess-tab" style="background-color: #8dd552; color: #fff;">
    <li class="mess-on"><span>CUSTOM MESSAGE</span></li>
    </div>
    <div class="col-md-3 view-tab">
    <li class="preview"><span>PREVIEW &amp; SEND</span></li>
    </div>
  </ul>
  </div> 
</div>

<div class="section-page">
<div class="container-fluid">
  <form name="cust-message" method="post" action="preview.php">
    <div class="container">
    <h2 class="h-mess">Customize introductory text</h2>
    <div class="col-lg-12">

    <textarea id='widgEditor' name="customText" class="customText">
        As part of our vendor management program, our institution will distribute variuos questionnaires to both
        prospective and existing vendor relationships. You are recieving this questionnaire so that we can
        gather necessary information from your company. Please copmplete this questionnaire and return by the deadline specified
        for this questionnaire. Contact us with any questions or concerns.
    </textarea>
    </div>
    <br>
    <h2 class="h-mess">Special message for email</h2>
    <div class="col-lg-12">
    <textarea name="message" id="message" placeholder="Add Special Message"></textarea></div>
    </div>

    <div class="container-fluid">
    <div class="col-md-12"><!--Space--></div>
    <div class="col-md-8"><!--Space--></div>
      <div class="col-md-4">
        <button class="form-button1" type="button" onclick="history.back(-1);">BACK</button>
        <input class="form-button2" type="submit" value="NEXT"/>
      </div>

</form>
<?php } ?>
</div>

</div>
</div>
