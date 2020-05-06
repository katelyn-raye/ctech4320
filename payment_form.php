
<?php
	include ('components.php');
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title> Bella Vita Italian Restaurant | spend your money </title>
    <meta name="description" content="Rendon, TX Italian Family Restaurant">
    <meta name="author" content="Katelyn Needham & Kathryn Kerr">

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php echo makeHeader('header'); ?>

  <div class="payment-container">
  <div class="billing-info">
    <h2> Billing Information</h2>
  <form action="contact-post.php">
  <div>
    <div class="resNames">
    <div>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
    <div>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  <div class="address">
    <label for="address1">Address Line 1</label>
    <div>
    <input type="text" id="address1" name="address" placeholder="1234 W Street">
    </div>
    <label for="address2">Address Line 2</label>
    <div>
    <input type="text" id="address2" name="address" placeholder="apt/suite number">
    </div>
  </div>
  <div class="resNames">
    <div>
      <label for="city">City</label>
      <input type="text" id="city" name="city" placeholder="City Name">
    </div>
    <div>
      <label for="zipcode">Zipcode</label>
      <input type="text" id="zipcode" name="zipcode" placeholder="12323">
    </div>
    <div>
      <label for="state">State</label>
      <input type="text" id="state" name="state" placeholder="TX">
    </div>
  </div>
  <div class="payment-info">
    <label for="payment">Payment Type</label>
    <div>
    <select id="payment" name="payment">
      <option value="Card">Card</option>
      <option value="Cash">Cash</option>
    </select>
    </div>
    <label for="card number">Card Number</label>
    <div>
    <input type="text" id="card" name="card" placeholder="1234-1234-1234">
    </div>
    <label for="cardholder name">Card Holder Name</label>
    <div>
    <input type="text" id="card holder name" name="cardholder name" placeholder="John Doe">
    </div>
    <div class="resNames">
      <div>
    <label for="expiration">Expiration Date</label>
    <input type="text" id="expiration" name="expiration" placeholder="09/20">
    </div>
    <div>
      <label for="csv">CVC/CID/CVV</label>
    <input type="text" id="csv" name="csv" placeholder="456">
    </div>
    </div>
    <label for="tip">Would you like to leave a tip?</label>
    <div>
    <input type="text" id="tip" name="tip" placeholder="Enter Tip Amount">
    </div>
    </div>
  <input type="submit"  name="SubmitThis" value="Submit">
  </form>
  </div>
  </div>
</body>
<?php echo makeFooter('footer'); ?>
</html>
