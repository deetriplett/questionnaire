<?php
$pageTitle = "Vendor Questionnaire";
$pageVendor = "A Community Bank";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $pageTitle; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel=”stylesheet” href=”widgEditor/css/widgEditor.css” />
  <script src=”widgEditor/scripts/widgEditor.js”></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/datepicker.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="container-fluid">
  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid" id="nav-links">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Live Chat</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Enterprise Admin</a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Inbox</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>
</div>

  <div class="container-fluid jumbotron">
  <div class="container-fluid logo">
   <h1 style="color:#8bb552;">ben</h1><h1>minder</h1>
   <p id="powered-by">Powered By Some Compliance</p>
  </div>
    <div class="container-fluid header-vendor">
    <span>
      <h3><?php echo $pageVendor; ?></h3>
      <span class="glyphicon glyphicon-triangle-right"></span>
      <a href="#">Go to Executive Dashboard</a>
    </span>
    </div>
  </div>


  <div class="breadcrumbs">
  <div class="container-fluid">
    <a href="questionnaire.php">Home</a> <span class="glyphicon glyphicon-triangle-right"></span> <h4 class="breadcrumb"><?php echo $pageTitle; ?></h4>
  </div>
  </div>

  <div class="container-fluid">
  <div class="row" id="banner">
        <div class"col-md-3">
          <span><img src="img/envelope_banner.jpg" alt="envelope" id="envelope">
        </span></div>

        <div class="col-md-3 banner-head">
          <h1>Send Questionnaire Request</h1>
        </div>

        <div class="col-md-6 descript">
          <h2>WHAT IS THIS?</h2>
          <p>Phasellus nec eros lorem. Suspendisse potenti. Vestibulum quis quam viverra, facilisis magna a, finitius turpis. Cum sociis natoque penatibus et margnis dis parturient, nascuer ridiculus mus.</p>
        </div>
      </div>
    </div>
