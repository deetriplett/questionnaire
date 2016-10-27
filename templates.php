<?php session_start();?>
<?php
  if($_POST){
    $_SESSION['vendorSelected'] = $_POST['vendorSelected'];
    $_SESSION['deadline'] = $_POST['deadline'];
    $_SESSION['recipientSelected'] = $_POST['recipientSelected'];
    // echo 'Your vendor selected is: '.$_SESSION['vendorSelected'].'';
    // echo 'Your deadline is: '.$_SESSION['deadline'].'';
    // echo 'The recipient is: '.$_SESSION['recipientSelected'].'';
    //

$pageTitle = "Vendor Questionnaire";
$qTemplate = "Bank of America";
$section = "templates";


include("inc/header.php");
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
    <div class="col-md-3 temp-tab" style="background-color: #8dd552; color: #fff;">
    <li class="temp-on"><span>TEMPLATES</span></li>
    </div>
    <div class="col-md-3 mess-tab">
    <li class="message"><span>CUSTOM MESSAGE</span></li>
    </div>
    <div class="col-md-3 view-tab">
    <li class="preview"><span>PREVIEW &amp; SEND</span></li>
    </div>
  </ul>
</div> <!--End-->
</div>

<div class ="section-page">
  <div class="container-fluid">
    <form name="temps" method="post" action="message.php">
      <textarea name="htmlArea" id="sample" cols=30 rows=6><h1 style="font-size:8em;">Sample Template</h1></textarea>
      <div class="table-responsive">
      <table class="table-bordered table-striped">
        <th class="t-head">QUESTIONNAIRE TEMPLATES</th> <?php// if(isset($template) echo "checked";)?>
          <tr>
            <td><div class="col-md-12">
                <div class="col-md-2">
                <input type="radio" name="template" >
                </div>
                <div class="col-md-8">
                <h4>Questionnaire Template for <?php echo $qTemplate; ?></h4>
                <br>
                <p>Aenean sit amet justo dui. Ut auctor blandit gravida. Cas a massa a ipsum aliquam semper in eu nunc.
                Donec bibendum id enim non lacini. Praescent tempor nisl eget tempus pellentesque. Vestibulum in sem sit amet
                nibh vulputate hendrerit.</p>
                </div>
                <div class="col-md-2">
                    <input type="button"  class="form-button2" value=" PREVIEW " onclick="displayHTML(this.form)">
                <!-- <button class="form-button2">PREVIEW</button> -->
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td><div class="col-md-12">
                <div class="col-md-2">
                <input type="radio" name="template">
                </div>
                <div class="col-md-8">
                <h4>Questionnaire Template for <?php echo $qTemplate; ?></h4>
                <br>
                <p>Aenean sit amet justo dui. Ut auctor blandit gravida. Cas a massa a ipsum aliquam semper in eu nunc.
                Donec bibendum id enim non lacini. Praescent tempor nisl eget tempus pellentesque. Vestibulum in sem sit amet
                nibh vulputate hendrerit.</p>
                </div>
                <div class="col-md-2">
                <input type="button"  class="form-button2" value=" PREVIEW " onclick="displayHTML(this.form)">
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td><div class="col-md-12">
                <div class="col-md-2">
                <input type="radio" name="template">
                </div>
                <div class="col-md-8">
                <h4>Questionnaire Template for <?php echo $qTemplate; ?></h4>
                <br>
                <p>Aenean sit amet justo dui. Ut auctor blandit gravida. Cas a massa a ipsum aliquam semper in eu nunc.
                Donec bibendum id enim non lacini. Praescent tempor nisl eget tempus pellentesque. Vestibulum in sem sit amet
                nibh vulputate hendrerit.</p>
                </div>
                <div class="col-md-2">
                <input type="button"  class="form-button2" value=" PREVIEW " onclick="displayHTML(this.form)">
              </div>
              </div>
            </td>
          </tr>

      </table>
    </div>

    <div class="buttons">
    <div class="container-fluid">
      <div class="col-md-12"><!--Space--></div>
      <div class="col-md-8"><!--Space--></div>
      <div class="col-md-4">
        <button class="form-button1" type="button" onclick="history.back(-1);">BACK</button>
        <button class="form-button2" type="submit">NEXT</button>
      </div>
    </div>
    </div>
  </form>
  <?php } ?>
</div>
</div>

<?php include('inc/footer.php');?>
