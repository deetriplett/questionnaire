<?php
$pageTitle = "Vendor Questionnaire";
$section = "recipient";

include("inc/header.php");
include("inc/cal.js");

?>

<div class="container">
    <div class="col-lg-12">
    <ul class="nav nav-pills" id="section-tabs">
      <div class="col-md-3 recip-tab" style="background-color: #8dd552; color: #fff;">
      <li class="recipient"><span>RECIPIENT</span></li>
      </div>
      <div class="col-md-3 temp-tab">
      <li class="templates"><span>TEMPLATES</span></li>
      </div>
      <div class="col-md-3 mess-tab">
      <li class="message"><span>CUSTOM MESSAGE</span></li>
      </div>
      <div class="col-md-3 view-tab">
      <li class="preview"><span>PREVIEW &amp; SEND</span></li>
      </div>
    </ul>
  	</div> 
</div>

<div class="section-page quest">
  <div class="container-fluid">
      <form class="form-horizontal" name="vend-recip" method="post" action="templates.php">
        <div class="form-group col-md-4">
          <label for="sender">Select Sender</label><br>
              <select name="vendorSelected">
                <option name="vendor" value="bank1">Bank 1</option>
                <option name="vendor" value="bank2">Bank 2</option>
                <option name="vendor" value="bank3">Bank 3</option>
              </select><br><br>
              <button class="add">+</button> <p>Add a new vendor product</p>
           </div>

        <div class="form-group col-md-4">
          <label for="date">Deadline</label><br>
              <input type="text" id="datepicker" name="deadline">
        </div>

        <div class="form-group col-md-4">
          <label for="recipient">Select Recipient</label><br>
            <select name="recipientSelected">
            <option name="recip" value="John Smith">John Smith</option>
            <option name="recip" value="Henrietta Smith">Henrietta Smith</option>
            <option name="recip" value="Johnny Depp">Johnny Depp</option>
          </select><br><br>
            <button class="add">+</button><p>Add new contact</p>
        </div>

        <div class="buttons">
        <div class="container-fluid">
          <div class="col-md-12"><!--Space--></div>
          <div class="col-md-8"><!--Space--></div>
          <div class="col-md-4">
            <button class="form-button1">CANCEL</button>
            <button class="form-button2" type="submit">NEXT</button>
          </div>
        </div>
        </div>
      </form>
  </div>
</div>
<?php include("inc/footer.php");?>
