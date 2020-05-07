<?php
	include ('components.php');
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
      <div class="quick-contact">
        <h2> Quick Contact </h2>
      <form action="contact-post.php">
      <div>
        <label for="fName">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="First Name">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Last Name">
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="user@domain.com">
        <label for="number">Phone Number</label>
        <input type="text" id="number" name="number" placeholder="(123)-876-9876">
      </div>
      <div>
        <label for="reason">Reason</label>
        <select id="reason" name="reason">
          <option value="Reservation Problem">Reservation Problem</option>
          <option value="Online Order">Online Order</option>
          <option value="Catering">Catering</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Tell Us More.." style="height:200px"></textarea>
      </div>
        <input type="Submit" name="SubmitThis" value="Submit" class="submit-btn">

      </form>
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
      <div class="google">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13448.065673193994!2d-97.2405284!3d32.5790862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefd1832325a11ccd!2sBellavita%20II%20Italian%20Restaurant!5e0!3m2!1sen!2sus!4v1586992899706!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
      </div>
  </body>
  <?php echo makeFooter('footer'); ?>
  </html>
