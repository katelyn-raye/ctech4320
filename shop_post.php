<?php

include('menupost.php');
	// validate user input : both id and quantity are required, and both need to be numbers
	// check for form submission from the menu page (the submit button name is "submitAdd", see above.
  if (array_key_exists("submitAdd", $_POST)){
  $required = array('id', 'quantity');
  $expected = array('id', 'quantity');
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
  	//	$cartStr = implode(", ", $quantity);
    if (!isset($_COOKIE['cart'])){
        $_COOKIE['cart'] = array();
    $_COOKIE['cart'][ $_POST['id']] = $_POST['quantity'];
  }
  	//	$output = "<table border=1 cellpadding=5>
  		//		<tr><th>Author</th><td>$img </td></tr>
  		  // <tr><th>Title</th><td>$name </td></tr>
  			  //<tr><th>Email</th><td>$price </td></tr>
  		   //<tr><th>Tag</th><td>$cartStr</td></tr>
          //   </table>";

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

          $cartContent = $cartContent . "<div class='item'>
          <img class='itemPic'src='images/$itemImgURL'>
          <h4 class='menu_title'>$itemName</h4>
          <p class='cost'>$itemCost</p>
          <div class='menuSubmitContainer'>
            <form action='shoppingcart.php' method='post'>
              <input type='hidden' name='id' value=' $cartid'>
              <input type='text' name='quantity' value='$quantity'>
              <input type='submit' name='submitAdd' value='Update' class='addCart'>
            </form>
          </div>
        </div>";
          }
    }

            // prepare the cart content
    $appetizerMenu = "";
      foreach ($_COOKIE['cart'] as $appetizerid =>$quantity){
        if ($item['category'] == 'Appetizer') {
          $appetizerMenu = $appetizerMenu . "<div class='item'>
            <img class='itemPic'src='images/{$item['imgURL']}'>
            <h4 class='menu_title'>{$item['name']}</h4>
            <p class='cost'>{$item['price']}</p>
            <div class='menuSubmitContainer'>
              <form action='shoppingcart.php' method='post'>
                <input type='hidden' name='id' value=' {$appetizerid}'>
                <input type='text' name='quantity' value='1'>
                <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
              </form>
            </div>
          </div>";
}}




	    // then just print out the above info (PRINTED ON A DIFFERENT PAGE)

	  // note that the whole shopping cart needs to be a form, too, so users can update the quantity.

	  // use the id as the field name so we know which item's quantity to update

	  // set the submit button's field name as the "submitUpdate" to distinguish it from the menu form

?>
