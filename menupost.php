<?php
$item = '<img class="itemPic"src="images/menuExample.jpg">
<h4 class="menu_title">Garlic Bread</h4>
<p class="cost">$2.99</p>';

setcookie("itemSelect", $item, time() + 14400);
// Cookies will only be available beginning next page load.  (So $_COOKIE['user'], which we just set up in the line above, is not avaible "now".) To use this cookie item "now" (this page load), we need to also assign the same value to the same $_COOKIE array item as below.
$_COOKIE['itemSelect'] = $item;

?>
