<?php
$fName = $_POST['fName'];
$lNamee = $_POST['lName'];
$partySize = $_POST['partySize'];
$date = $_POST['var'];
$time = $_POST['resTime'];
$checkbox = $_POST['access'];
$bgcolor = $_POST['partyAccess'];

$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$code = substr(str_shuffle($permitted_chars), 0, 5);

$output="<p>Thank you $fName, we'll have a table ready for your party of $partySize at $time on $date. </p> <p>Your code is:</p> $code <p>Show this code to the host to check in.</p>";

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="master.css">

  </head>
  <body>
    <h2>Preview Your Message</h2>

    <hr size="1">
    <p>
    	<?php echo $output ?>
    </p>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="basic.js"></script>
</html>
