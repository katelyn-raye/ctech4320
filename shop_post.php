<?php

include('menupost.php');
	// validate user input : both id and quantity are required, and both need to be numbers
	// check for form submission from the menu page (the submit button name is "submitAdd", see above.
  if (array_key_exists("submitAdd", $_POST)){
  $required = array('id','quantity');
  $expected = array('id','quantity');
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

    if ($quantity < 1) {

        $err['quantity'] = "Please select at least one item.";
    }
  	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.
    if (empty($missing) & empty($err)){
        // set up the cookie variable name
        $id = intval($id); // ensure $id is an integer (this is to deal with zero)
        $cName = "cart[$id]";
        if (isset($_COOKIE['cart'])){
                    // if yes, see if the item has been added to the cart already
                    if (array_key_exists($id, $_COOKIE['cart'])) {
                        // if yes, add the new quantity to the exisitng quantity
                        $newQuantity = $_COOKIE['cart'][$id] + $quantity;
                        // set up the cookie to store the user choice for later page load
                        setcookie($cName, $newQuantity, time()+86400);
                        // manually define the cookie for use right now
                        $_COOKIE['cart'][$id] = $newQuantity;
                    } else {
                        // the item has not been added to the cart yet
                        setcookie($cName, $quantity, time()+86400);
                        $_COOKIE['cart'][$id] = $quantity;
                    }
                } else {
                    // if no, set the cookie
                    setcookie($cName, $quantity, time()+86400);
                    $_COOKIE['cart'][$id] = $quantity;
                }

          	} else {

                  $output = "<h3>Oops!</h3>\n
                          <p>Our system is not able to process your request.  Please see the issues below.</p>\n";

                  $output .= "<ul>";

                  if (!empty($missing)){
                      // $missing array is not empty -- prepare a message for the user

                      //$missingFieldList = implode(", ",$missing);
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
          	$output = "Please post your message use <a href='post_form.php'>this form</a>.";
          }


          $cartContent = "";
              foreach ($_COOKIE['cart'] as $cartid =>$quantity){

                  if ($quantity > 0){  // do not print the items with quantity as 0
                      $itemName = $food[$cartid]['name'];
                      $itemImgURL = $food[$cartid]['imgURL'];
                      $itemCost = $food[$cartid]['price'];

                      $totalPrice = $totalPrice + $quantity * $itemCost;

                    $cartContent = $cartContent . "<div class='item'>
                    <img class='itemPic'src='images/$itemImgURL'>
                    <h4 class='menu_title'>$itemName</h4>
                    <p class='cost'>$itemCost</p>
                    <div class='menuSubmitContainer'>
                      <form action='shoppingcart.php' method='post'>
                        <input type='hidden' name='id' value=' $cartid'>
                        <input type='text' name='quantity' value='$quantity'>
                        <input type='submit' name='submitUpdate' value='Update' class='addCart'>
                      </form>
                    </div>
                  </div>";
                    }

                  //if (!empty($cartContent)){
                  //  $cartTotal +=$price*$quantity;
                  }


	    // then just print out the above info (PRINTED ON A DIFFERENT PAGE)

	  // note that the whole shopping cart needs to be a form, too, so users can update the quantity.

	  // use the id as the field name so we know which item's quantity to update

	  // set the submit button's field name as the "submitUpdate" to distinguish it from the menu form

?>
