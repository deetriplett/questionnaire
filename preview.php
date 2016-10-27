<?php session_start();?>
<?php
  if($_POST){
    $_SESSION['customText'] = $_POST['customText'];
    $_SESSION['message'] = $_POST['message'];
    //
    // echo 'The custom text is: '.$_SESSION['customText'].'';
    // echo 'Your Special Message is: '.$_SESSION['message'].'';


$pageTitle="Preview & Send";
$section ="preview";
include("inc/header.php")
?>

<script>
function displayHTML(form) {
  var inf = form.htmlArea.value;
  win = window.open(", ", 'popup', 'toolbar = no, status = no');
  win.document.write("" + inf + "");
}</script>

<div class="container">
  <div class="col-lg-12">
  <ul class="nav nav-pills" id="section-tabs">
    <div class="col-md-3 recip-tab">
    <li class="recip"><a href="questionnaire.php"><span>RECIPIENT</span></a></li>
    </div>
    <div class="col-md-3 temp-tab">
    <li class="templates"><a href="templates.php"><span>TEMPLATES</span></a></li>
    </div>
    <div class="col-md-3 mess-tab">
    <li class="message"><a href="message.php"><span>CUSTOM MESSAGE</span></a></li>
    </div>
    <div class="col-md-3 view-tab" style="background-color: #8dd552; color: #fff;">
    <li class="view-on"><span>PREVIEW &amp; SEND</span></li>
    </div>
  </ul>
</div> <!--End-->
</div>

<div class="section page">
  <form name="view" method="post" action="sent.php">
    <textarea name="htmlArea" id="sample" cols=30 rows=6><h1 style="font-size:8em;">Sample Template</h1></textarea>
    <div class="container preview-page">
    <div class="container row-recipient">
      <div class="col-md-4">
        <h2>Recipient</h2>
      </div>
      <div class="col-md-8 recip-list">
        <p><b>Vendor: </b><?php echo $_SESSION['vendorSelected'];?></p>
        <p><b>Deadline: </b><?php echo $_SESSION['deadline'];?></p>
        <p><b>Recipient: </b><?php echo $_SESSION['recipientSelected'];?></p>
      </div>
    </div>

    <div class="container row-questionnaire">
      <div class="col-md-4">
        <h2>Questionnaire</h2>
      </div>
      <div class="col-md-6">
        <p><b>Questionnaire selected:</b><?php echo $_SESSION['template'];?></p>
        <p><b>Name displayed to vendor:</b> Review for  <?php echo $pageVendor;?></p>
      </div>
      <div class="col-md-2">
        <input type="button"  class="temp-view" value=" PREVIEW " onclick="displayHTML(this.form)">
      </div>
    </div>
    <div class="container row-intro">
      <div class="col-md-4">
        <h2>Introduction</h2>
      </div>
      <div class="col-md-8">
        <p><?php echo $_SESSION['customText'];?></p>
      </div>
    </div>
    <div class="container row-message">
      <div class="col-md-4">
        <h2>Email Message</h2>
      </div>
      <div class="col-md-8 email-message">
        <?php echo $_SESSION['message'];?>
      </div>
</div>

    </div>

  <div class="container-fluid">
  <div class="col-md-12"><!--Space--></div>
  <div class="col-md-8"><!--Space--></div>
  <div class="col-md-4">
      <button class ="form-button1" type="button" onclick="history.back(-1);">BACK</button>
      <button class ="form-button2" type="submit">SEND</button>
  </div>
  </div>
</form>
<?php } ?>
</div>

<?php include('inc/footer.php');?>
