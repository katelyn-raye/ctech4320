<?php
	include ('components.php');

	$fName = $_POST['fName'];
	$fLength = strlen($fName);
	$lName = $_POST['lName'];
	$lLength = strlen($lName);
	$receiver = $_POST['email'];
	$reason = $_POST['reason'];
	$comment = $_POST['subject'];


	if (array_key_exists("SubmitThis", $_POST)) {

		//== Modify the required and expected arrays below to fit your form ========
		$required = array('fName', 'lName','reason','email');
		$expected = array('fName', 'lName','reason', 'subject', 'email');
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

	      $success="<h1>Thanks for Reaching Out!</h1><div class='thumb'><img src ='images/thumb.svg' title='thumbs up' alt='thumbs up'></div>";

			$output="<p>Thanks for your inquiry <span class='resEmphasis'>$fName $lName</span>, we'll get in touch with you as soon as possible.
			 A confirmation email was sent to you at $receiver</p>";
	    $to="kathryn.kerr@mavs.uta.edu, $receiver"; // change this to your own email address
	    $subject="Bella Vita Inquiry Confirmation";
	    $header="From: bellavita@mysite.com";
	    $message="Thank you $fName $lName, we recieved your inquiry about $reason.

	    We'll get in touch!";
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
		$output = "Please use <a href='contact.php'>this form</a> to make an inquiry.";
	}





?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title> Bella Vita Italian Restaurant | Contact </title>
    <meta name="description" content="Rendon, TX Italian Family Restaurant">
    <meta name="author" content="Katelyn Needham & Kathryn Kerr">

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<?php echo makeHeader('header'); ?>
    <div class="catering-banner">
      <p><b>We Cater. </b>Want us to be your personal chef for your special event? Call 817-483-0330.</p>
    </div>

      <div class="contact-container">
    <div class="quick-contact col-lg-6 col-md-6">

    <?php echo $success ?>
    <?php echo $output ?>
    </div>
    <div class="map">
        <h1>Contact Us</h1>
          <p><strong>Phone: 817-483-0330<br>
          Address: 5694 FM 1187, Rendon, TX 76140</strong></p>
        <h2>Business Hours</h2>
        <p> Mon-Saturday: 11:00 am - 9:30 pm <br>
          Sunday: 11:00 am - 8:30 pm </p>
        <p>We accept the following payments </p>
        <div class="cards">
          <img src="images/cc_icon_amex.png" title="american express" alt="american express">
          <img src="images/cc_icon_discover.png" title="discover" alt="discover">
          <img src="images/cc_icon_mc.png" title="master card" alt="master card">
          <img src="images/cc_icon_visa.png" title="visa" alt="visa">
        </div>
    </div>
      </div>
  </body>
<?php echo makeFooter('footer'); ?>
  </html>
