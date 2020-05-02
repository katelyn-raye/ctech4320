<?php
// check for form submission from the menu page (the submit button name is "submitAdd", see above.
//if (array_key_exists("submitAdd", $_POST))
// validate user input : both id and quantity are required, and both need to be numbers
$required = array('id', 'quantity');
// add the item to the cookie variable

//set up $_COOKIE['cart'] as an array if it is not set already
  If (!isset($_COOKIE['cart']) {$_COOKIE['cart'] = array()};
  $_COOKIE['cart'][ $_POST['id']] = $_POST['quantity'];

//To display the content, you run a foreach loop through the $_COOKIE['cart'] array.
$appetizerMenu = "";
  foreach ($_COOKIE['cart'], $appetizerid =>$quantity){
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
    }
  }

  $saladsMenu = "";
    foreach ($_COOKIE['cart'], $saladsid =>$quantity){
      if ($item['category'] == 'Salads') {
        $saladsMenu = $saladsMenu . "<div class='item'>
          <img class='itemPic'src='images/{$item['imgURL']}'>
          <h4 class='menu_title'>{$item['name']}</h4>
          <p class='cost'>{$item['price']}</p>
          <div class='menuSubmitContainer'>
            <form action='shoppingcart.php' method='post'>
              <input type='hidden' name='id' value=' {$saladsid}'>
              <input type='text' name='quantity' value='1'>
              <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
            </form>
          </div>
        </div>";
      }
    }
    $sidesMenu = "";
      foreach ($_COOKIE['cart'], $sidesid =>$quantity){
        if ($item['category'] == 'Side Orders') {
          $sidesMenu = $sidesMenu . "<div class='item'>
            <img class='itemPic'src='images/{$item['imgURL']}'>
            <h4 class='menu_title'>{$item['name']}</h4>
            <p class='cost'>{$item['price']}</p>
            <div class='menuSubmitContainer'>
              <form action='shoppingcart.php' method='post'>
                <input type='hidden' name='id' value=' {$sizesid}'>
                <input type='text' name='quantity' value='1'>
                <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
              </form>
            </div>
          </div>";
        }
      }

      $kidsmenuMenu = "";
        foreach ($_COOKIE['cart'], $kidsmenuid =>$quantity){
          if ($item['category'] == 'Child Menu') {
            $kidsmenuMenu = $kidsmenuMenu . "<div class='item'>
              <img class='itemPic'src='images/{$item['imgURL']}'>
              <h4 class='menu_title'>{$item['name']}</h4>
              <p class='cost'>{$item['price']}</p>
              <div class='menuSubmitContainer'>
                <form action='shoppingcart.php' method='post'>
                  <input type='hidden' name='id' value=' {$kidsmenuid}'>
                  <input type='text' name='quantity' value='1'>
                  <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
                </form>
              </div>
            </div>";
          }
        }

$sandwichesMenu = "";
  foreach ($_COOKIE['cart'], $sandwichesid =>$quantity){
    if ($item['category'] == 'Sandwiches') {
      $sandwichesMenu = $sandwichesMenu . "<div class='item'>
        <img class='itemPic'src='images/{$item['imgURL']}'>
        <h4 class='menu_title'>{$item['name']}</h4>
        <p class='cost'>{$item['price']}</p>
        <div class='menuSubmitContainer'>
          <form action='shoppingcart.php' method='post'>
            <input type='hidden' name='id' value=' {$sandwichesid}'>
            <input type='text' name='quantity' value='1'>
            <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
          </form>
        </div>
      </div>";
    }
  }

  $subsMenu = "";
    foreach ($_COOKIE['cart'], $subsid =>$quantity){
      if ($item['category'] == 'Hot Subs') {
        $subsMenu = $subsMenu . "<div class='item'>
          <img class='itemPic'src='images/{$item['imgURL']}'>
          <h4 class='menu_title'>{$item['name']}</h4>
          <p class='cost'>{$item['price']}</p>
          <div class='menuSubmitContainer'>
            <form action='shoppingcart.php' method='post'>
              <input type='hidden' name='id' value=' {$subsid}'>
              <input type='text' name='quantity' value='1'>
              <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
            </form>
          </div>
        </div>";
      }
    }
    $pastaplusMenu = "";
      foreach ($_COOKIE['cart'], $pastaplusid =>$quantity){
        if ($item['category'] == 'Pasta Plus') {
          $pastaplusMenu = $pastaplusMenu . "<div class='item'>
            <img class='itemPic'src='images/{$item['imgURL']}'>
            <h4 class='menu_title'>{$item['name']}</h4>
            <p class='cost'>{$item['price']}</p>
            <div class='menuSubmitContainer'>
              <form action='shoppingcart.php' method='post'>
                <input type='hidden' name='id' value=' {$pastaplusid}'>
                <input type='text' name='quantity' value='1'>
                <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
              </form>
            </div>
          </div>";
        }
      }

      $bakedpastaMenu = "";
        foreach ($_COOKIE['cart'], $bakedpastaid =>$quantity){
          if ($item['category'] == 'Baked Pasta') {
            $bakedpastaMenu = $bakedpastaMenu . "<div class='item'>
              <img class='itemPic'src='images/{$item['imgURL']}'>
              <h4 class='menu_title'>{$item['name']}</h4>
              <p class='cost'>{$item['price']}</p>
              <div class='menuSubmitContainer'>
                <form action='shoppingcart.php' method='post'>
                  <input type='hidden' name='id' value=' {$bakedpastaid}'>
                  <input type='text' name='quantity' value='1'>
                  <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
                </form>
              </div>
            </div>";
          }
        }

$chickenentreesMenu = "";
  foreach ($_COOKIE['cart'], $chickenentreesid =>$quantity){
    if ($item['category'] == 'Chicken Entrees') {
      $chickenentreesMenu = $chickenentreesMenu . "<div class='item'>
        <img class='itemPic'src='images/{$item['imgURL']}'>
        <h4 class='menu_title'>{$item['name']}</h4>
        <p class='cost'>{$item['price']}</p>
        <p class='description'>{$item['description']}</p>
        <div class='menuSubmitContainer'>
          <form action='shoppingcart.php' method='post'>
            <input type='hidden' name='id' value=' {$chickenentreesid}'>
            <input type='text' name='quantity' value='1'>
            <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
          </form>
        </div>
      </div>";
    }
  }

  $seafoodentreesMenu = "";
    foreach ($_COOKIE['cart'], $seafoodentreesid =>$quantity){
      if ($item['category'] == 'Seafood Entrees') {
        $seafoodentreesMenu = $seafoodentreesMenu . "<div class='item'>
          <img class='itemPic'src='images/{$item['imgURL']}'>
          <h4 class='menu_title'>{$item['name']}</h4>
          <p class='cost'>{$item['price']}</p>
          <p class='description'>{$item['description']}</p>
          <div class='menuSubmitContainer'>
            <form action='shoppingcart.php' method='post'>
              <input type='hidden' name='id' value=' {$seafoodentreesid}'>
              <input type='text' name='quantity' value='1'>
              <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
            </form>
          </div>
        </div>";
      }
    }
    $neapolitanMenu = "";
      foreach ($_COOKIE['cart'], $neapolitanid =>$quantity){
        if ($item['category'] == 'Neapolitan Style Pizza') {
          $neapolitanMenu = $neapolitanMenu . "<div class='item'>
            <img class='itemPic'src='images/{$item['imgURL']}'>
            <h4 class='menu_title'>{$item['name']}</h4>
            <p class='cost'>{$item['price']}</p>
            <div class='menuSubmitContainer'>
              <form action='shoppingcart.php' method='post'>
                <input type='hidden' name='id' value=' {$neapolitanid}'>
                <input type='text' name='quantity' value='1'>
                <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
              </form>
            </div>
          </div>";
        }
      }

      $pizzatoppingsMenu = "";
        foreach ($_COOKIE['cart'], $pizzatoppingsid =>$quantity){
          if ($item['category'] == 'Pizza Toppings') {
            $pizzatoppingsMenu = $vpizzatoppingsMenu . "<div class='item'>
              <img class='itemPic'src='images/{$item['imgURL']}'>
              <h4 class='menu_title'>{$item['name']}</h4>
              <p class='cost'>{$item['price']}</p>
              <p class='description'>{$item['description']}</p>
              <div class='menuSubmitContainer'>
                <form action='shoppingcart.php' method='post'>
                  <input type='hidden' name='id' value=' {$pizzatoppingsid}'>
                  <input type='text' name='quantity' value='1'>
                  <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
                </form>
              </div>
            </div>";
          }
        }

$specialtytoppingsMenu = "";
  foreach ($_COOKIE['cart'], $specialtytoppingsid =>$quantity){
    if ($item['category'] == 'Specialty Toppings') {
      $specialtytoppingsMenu = $specialtytoppingsMenu . "<div class='item'>
        <img class='itemPic'src='images/{$item['imgURL']}'>
        <h4 class='menu_title'>{$item['name']}</h4>
        <p class='cost'>{$item['price']}</p>
        <p class='description'>{$item['description']}</p>
        <div class='menuSubmitContainer'>
          <form action='shoppingcart.php' method='post'>
            <input type='hidden' name='id' value=' {$specialtytoppingsid}'>
            <input type='text' name='quantity' value='1'>
            <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
          </form>
        </div>
      </div>";
    }
  }

  $specialtypizzaMenu = "";
    foreach ($_COOKIE['cart'], $specialtypizzaid =>$quantity){
      if ($item['category'] == 'Specialty Pizza') {
        $specialtypizzaMenu = $specialtypizzaMenu . "<div class='item'>
          <img class='itemPic'src='images/{$item['imgURL']}'>
          <h4 class='menu_title'>{$item['name']}</h4>
          <p class='cost'>{$item['price']}</p>
          <div class='menuSubmitContainer'>
            <form action='shoppingcart.php' method='post'>
              <input type='hidden' name='id' value=' {$specialtypizzaid}'>
              <input type='text' name='quantity' value='1'>
              <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
            </form>
          </div>
        </div>";
      }
    }
    $dessertsMenu = "";
      foreach ($_COOKIE['cart'], $dessertsid =>$quantity){
        if ($item['category'] == 'Desserts') {
          $dessertsMenu = $dessertsMenu . "<div class='item'>
            <img class='itemPic'src='images/{$item['imgURL']}'>
            <h4 class='menu_title'>{$item['name']}</h4>
            <p class='cost'>{$item['price']}</p>
            <div class='menuSubmitContainer'>
              <form action='shoppingcart.php' method='post'>
                <input type='hidden' name='id' value=' {$dessertsid}'>
                <input type='text' name='quantity' value='1'>
                <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
              </form>
            </div>
          </div>";
        }
      }

      $drinksMenu = "";
        foreach ($_COOKIE['cart'], $drinksid =>$quantity){
          if ($item['category'] == 'Drinks') {
            $drinksMenu = $drinksMenu . "<div class='item'>
              <img class='itemPic'src='images/{$item['imgURL']}'>
              <h4 class='menu_title'>{$item['name']}</h4>
              <p class='cost'>{$item['price']}</p>
              <p class='description'>{$item['description']}</p>
              <div class='menuSubmitContainer'>
                <form action='shoppingcart.php' method='post'>
                  <input type='hidden' name='id' value=' {$drinksid}'>
                  <input type='text' name='quantity' value='1'>
                  <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
                </form>
              </div>
            </div>";
          }
        }

        $barMenu = "";
          foreach ($_COOKIE['cart'], $barid =>$quantity){
            if ($item['category'] == 'Full Bar') {
              $barMenu = $barMenu . "<div class='item'>
                <img class='itemPic'src='images/{$item['imgURL']}'>
                <h4 class='menu_title'>{$item['name']}</h4>
                <p class='description'>{$item['description']}</p>
                <div class='menuSubmitContainer'>
                  <form action='shoppingcart.php' method='post'>
                    <input type='hidden' name='id' value=' {$barid}'>
                    <input type='text' name='quantity' value='1'>
                    <input type='submit' name='submitAdd' value='Add to Cart' class='addCart'>
                  </form>
                </div>
              </div>";
            }
          }

    // then just print out the above info

  // note that the whole shopping cart needs to be a form, too, so users can update the quantity.

  // use the id as the field name so we know which item's quantity to update

  // set the submit button's field name as the "submitUpdate" to distinguish it from the menu form

?>
