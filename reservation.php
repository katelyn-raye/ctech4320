<?php
	include ('components.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

  </head>
  <body>

      <?php echo makeHeader('header'); ?>

    <main>

      <p>Parties of 10 or more please call to make your reservation.</p>

    <div class="resWrap">
    <form action= "reservation_post.php" method="post">

      <div class="resNames">

        <div class = "resFlexGroup">
          <label class="resTitle">First Name</label>
          <input type="text" name="fName" class="resHalf" placeholder="First Name">
        </div>

        <div class = "resFlexGroup">
          <label class="resTitle">Last Name</label>
          <input type="text" name="lName" class="resHalf" placeholder="Last Name">
        </div>
      </div>
			<div class="resNames">
				<div class = "resFlexGroup">
          <label class="resTitle">Party Size</label>
          <select class="partySize" name="partySize">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
           </select>
</div>
			<div class = "resFlexGroup">
          <label class="resTitle">Reservation Date</label>
          <input type="date" name="date" id="date" value="<?php echo date('m-d-Y'); ?>">
        </div>
			</div>
			<div class="resNames">
				<div class = "resFlexGroup">
          <label class="resTitle">Reservation Time</label>
          <select class="partySize" name="resTime" class="resHalf">
            <option value="11:30 AM">11:30 AM</option>
            <option value="12:00 PM">12:00 PM</option>
            <option value="12:30 PM">12:30 PM</option>
            <option value="1:00 PM">1:00 PM</option>
            <option value="1:30 PM">1:30 PM</option>
            <option value="2:00 PM">2:00 PM</option>
            <option value="2:30 PM">2:30 PM</option>
            <option value="3:00 PM">3:00 PM</option>
            <option value="3:30 PM">3:30 PM</option>
            <option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
           </select>
				 </div>

				 <div class = "resFlexGroup">
           <label class="resTitle">Email</label>
           <input type="email" name="email" placeholder="user@domain.com">
 				 </div>
    </div>

				<div class="check">
        <input type="checkbox" name="access" class="checkAccess"> <label>Need Accessible Seating?</label>


        <div class="resNames" id="yesAccess">
						<div class = "resFlexGroup">
          <label class="resTitle">How many in party?</label>
          <select class="partySize" name="partyAccess">
             <option value="partyOne">1</option>
             <option value="partyTwo">2</option>
             <option value="partyThree">3</option>
             <option value="partyFour">4</option>
             <option value="partyFive">5</option>
             <option value="partySix">6</option>
             <option value="partySeven">7</option>
             <option value="partyEight">8</option>
             <option value="partyNine">9</option>
             </select>
           </div>
			</div>
		</div>
	</div>

					 <div class="submit-button">
        <input type="Submit" name="SubmitThis" value="Submit" class="submit-btn">
					</div>
       </form>

    </div>

    </main>

    <?php echo makeFooter('footer'); ?>
  <script src="basic.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

  </body>
</html>
