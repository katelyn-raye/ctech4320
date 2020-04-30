<?php
$item = '<img class="itemPic"src="images/menuExample.jpg">
<h4 class="menu_title">Garlic Bread</h4>
<p class="cost">$2.99</p>';

setcookie("itemSelect", $item, time() + 14400);
// Cookies will only be available beginning next page load.  (So $_COOKIE['user'], which we just set up in the line above, is not avaible "now".) To use this cookie item "now" (this page load), we need to also assign the same value to the same $_COOKIE array item as below.
$_COOKIE['itemSelect'] = $item;

$food = array();

$food[0] = array()

               $food[0]['category'] = 'Appetizer';
               $food[0]['name'] = 'Garlic Bread';
               $food[0]['imgURL'] = 'garlicBread.jpg';  // if all your images are in the same folder, you only need the file name here
               $food[0]['price'] = '2.99';
$food[1] = array()
               $food[1]['category'] = 'Appetizer';
               $food[1]['name'] = 'Fried Cheese';
               $food[1]['description'] = 'Southern Italian style Fried Cheese';
               $food[1]['imgURL'] = 'FriedCheese.jpg';  // if all your images are in the same folder, you only need the file name here
               $food[1]['price'] = '9.99';



?>
