<?php
include ('components.php');

$fName = $_POST['fName'];
$fLength = strlen($fName);
$lName = $_POST['lName'];
$lLength = strlen($lName);
$partySize = $_POST['partySize'];
$date = date('F d, Y', strtotime($_POST['date']));
$time = $_POST['resTime'];
$checkbox = $_POST['access'];
$bgcolor = $_POST['partyAccess'];
$receiver = $_POST['email'];

$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$code = substr(str_shuffle($permitted_chars), 0, 5);

if (array_key_exists("SubmitThis", $_POST)) {

	//== Modify the required and expected arrays below to fit your form ========
	$required = array('fName', 'lName','partySize', 'resTime', 'email');
	$expected = array('fName', 'lName','partySize', 'resTime', 'email');
	$missing = array();

	// use foreach loop to run through each item in the expected array
	foreach($expected as $thisField) {
		// setup a variable to store user input for this field name
		$thisUserInput = $_POST[$thisField];
		if (in_array($thisField, $required)) {
			if (empty($thisUserInput)) {
				array_push($missing, $thisField);
			} else {
				${$thisField} = $thisUserInput;
			}
		} else {
			${$thisField} = $thisUserInput;
		}
	}



	$err = array();

    //-----------------
    if ($fLength < 1) {

        $err['fName'] = "Please use at least 1 character.";
    }

    if ($lLength < 1) {

        $err['lName'] = "Please use at least 1 character.";
    }
    // validation: the name should be at least 1-character long.




	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.


	if (empty($missing) & empty($err)){
    if (!empty($email)) {
			$email = "<a href='mailto:$email'>$email</a>"; }

		$output="<p>Thank you <span class='resEmphasis'>$fName</span>, we'll have a table ready for your party of <span class='resEmphasis'>$partySize</span> at <span class='resEmphasis'>$time</span> on <span class='resEmphasis'>$date</span>. </p> <p>Your code is:</p><span id='resCode'>$code</span> <p>Show this code to the host to check in.</p>";
    $to="kathryn.kerrg@mavs.uta.edu"; // change this to your own email address
    $subject="Bella Vita Reservation Confirmation";
    $header="From: bellavita@mysite.com";
    $message="Thank you $fName $lName, we recieved your reservation details for your party of $partySize on $date.

    Your confirmation number is $code, we'll have your table ready at $time.

    Show the confirmation code to check in with the host. We can't wait to see you soon!";
// try setting $message = $output; and see what you receive in the email

$mailSent = mail($to,$subject,$message,$header);

// add $emailResultMessage to the comment preview table as the final output
$output = $output.$emailResultMessage;


	} else {

        $output = "<h3>Oops!</h3>\n
                <p>Our system is not able to process your request.  Please see the issues below.</p>\n";

        $output .= "<ul>";

        if (!empty($missing)){
            // $missing array is not empty -- prepare a message for the user

            $missingFieldList = implode(", ",$missing);
            $output .= "<li><b>Missing fields</b>:<br>
                        The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						Missing fields: $missingFieldList \n
					</li>\n";
        }

        if (!empty($err)){
            foreach ($err as $key => $message) {
                $output .= "<li><b>$key</b>:<br>$message </li>\n";
            }
        }

        $output .= "</ul>\n";
	}


} else {
	$output = "Please use <a href='reservation.php'>this form</a> to make an inquiry.";
}


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Bella Vita Italian Restaurant | Online Reservation </title>

    <link rel="stylesheet" href="css/styles.css">

  </head>
  <body>
		<?php echo makeHeader('header'); ?>
		<div class="catering-banner">
			<p><b>We Cater. </b>Want us to be your personal chef for your special event? Call 817-483-0330.</p>
		</div>
		<div class="wrapper">
			<div class="res-table">
			<img src="images/table.jpg" alt="reserved table" title="table reservation">
		</div>
			<h1>We've Received Your Reservation!</h1>
    <p>
      <div class="resWrap">
    	<?php echo $output ?>
      </div>
    </p>
  </body>
  <?php echo makeFooter('footer'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="basic.js"></script>
</html>
