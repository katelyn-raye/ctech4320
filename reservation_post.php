<?php
include ('components.php');

$fName = $_POST['fName'];
$lNamee = $_POST['lName'];
$partySize = $_POST['partySize'];
$date = date('m-d-Y', strtotime($_POST['date']));
$time = $_POST['resTime'];
$checkbox = $_POST['access'];
$bgcolor = $_POST['partyAccess'];

$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$code = substr(str_shuffle($permitted_chars), 0, 5);

//$date = date("F j, Y");

$output="<p>Thank you <span class='resEmphasis'>$fName</span>, we'll have a table ready for your party of <span class='resEmphasis'>$partySize</span> at <span class='resEmphasis'>$time</span> on <span class='resEmphasis'>$date</span>. </p> <p>Your code is:</p><span id='resCode'>$code</span> <p>Show this code to the host to check in.</p>";

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Bella Vita Italian Restaurant | Online Reservation </title>

    <link rel="stylesheet" href="css/styles.css">

  </head>
  <body>
    <p>
      <?php echo makeHeader('header'); ?>
      <div class="resWrap">
    	<?php echo $output ?>
      </div>
    </p>
  </body>
  <?php echo makeFooter('footer'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="basic.js"></script>
</html>
