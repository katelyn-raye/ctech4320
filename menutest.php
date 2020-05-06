<?php
	include('menupost.php');
	include('components.php');
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title> Bella Vita Italian Restaurant | Home </title>
    <meta name="description" content="Rendon, TX Italian Family Restaurant">
    <meta name="author" content="Katelyn Needham & Kathryn Kerr">

    <link rel="stylesheet" href="css/styles.css">

		  <?php echo makeHeader('header'); ?>

</head>
<body>

    <!-- NAVIGATION End -->

    <div class="catering-banner">
      <p><b>We Cater. </b>Want us to be your personal chef for your special event? Call 817-483-0330.</p>
    </div>

      <div class="wrapper">
      <div class="col-lg-12 col-md-12 col-xs-12 menu-header-btn">
        <h1>Menu </h1>
        <h2>Save Time and Order Online</h2>
      <p> <strong> We now offer online ordering, add to your favorite dishes to the cart and never wait for a meal again.</strong>
      </div>
<div class="menu-main">
	<div id="pge-top" class="small-nav col-lg-3 col-md-2">
		<ul>
			<li class="small-nav-toggler dropdown">
				<a class="nav-link closed" href="#" title="Link">Starters</a>
				<ul class="small-nav-dropdown">
					 <li><a href="#goto1" class="dropdown-item">Appetizers</a></li>
						<li><a href="#goto2" class="dropdown-item">Salads</a></li>
						</li>
				</ul>
			<li class="small-nav-toggler">Pasta</li>
			<ul class="small-nav-dropdown">
				<li><a href="#goto7">Pasta Plus</a></li>
				<li><a href="#goto8">Baked Pasta</a></li>
			</ul>
			<li class="small-nav-toggler">Entrees</li>
				<ul class="small-nav-dropdown">
					<li><a href="#goto9">Chicken Entrees</a></li>
					<li><a href="#goto10">Seafood Entrees</a></li>
				</ul>
			<li class="small-nav-toggler">Pizza</li>
				<ul class="small-nav-dropdown">
					<li><a href="#got011">Neapolitan Style Pizza</a></li>
					<li><a href="#goto12">Pizza Toppings</a></li>
					<li><a href="#goto13">Specialty Toppings</a></li>
					<li><a href="#goto14">Specialty Pizza</a></li>
			 </ul>
			<li class="small-nav-toggler">Sandwiches</li>
			<ul class="small-nav-dropdown">
			<li><a href="#goto5">Sandwiches</a></li>
			<li><a href="#goto6">Hot Subs</a></li>
		 </ul>
			<li><a href="#goto4">Kids Menu</a></li>
			<li class="small-nav-toggler">Sides</li>
					<ul class="small-nav-dropdown">
						<li><a href="#goto3">Side Orders</a></li>
						<li><a href="#goto16">Drinks</a></li>
						<li><a href="#goto17">Full Bar</a></li>
					</ul>
			<li><a href="#goto15">Desserts</a></li>

		</ul>
	</div>
	<div class ="menu-items col-lg-9 col-md-10 col-xs-12">
<div id="goto1" class="menurow">
	<h2>Appetizer</h2><br>
  <?php
  	echo $appetizerMenu;
  ?>
</div>

<div id="goto2" class="menurow">
	<h2>Salads</h2><br>
  <?php
  	echo $saladsMenu;
  ?>
</div>

<div id="goto3" class="menurow">
	<h2>Side Orders</h2><br>
  <?php
  	echo $sidesMenu;
  ?>
</div>

<div id="goto4" class="menurow">
	<h2>Children's Menu</h2><br>
  <?php
  	echo $kidsmenuMenu;
  ?>
</div>

<div id="goto5" class="menurow">
	<h2>Sandwiches</h2><br>
  <?php
  	echo $sandwichesMenu;
  ?>
</div>

<div id="goto6" class="menurow">
	<h2>Hot Subs</h2><br>
  <?php
  	echo $subsMenu;
  ?>
</div>

<div id="goto7" class="menurow">
	<h2>Pasta Plus</h2><br>
  <?php
  	echo $pastaplusMenu;
  ?>
</div>

<div id="goto8" class="menurow">
	<h2>Baked Pasta</h2><br>
  <?php
  	echo $bakedpastaMenu;
  ?>
</div>

<div id="goto9" class="menurow">
	<h2>Chicken Entrees</h2><br>
  <?php
  	echo $chickenentreesMenu;
  ?>
</div>

<div id="goto10"class="menurow">
	<h2>Seafood Entrees</h2><br>
  <?php
  	echo $seafoodentreesMenu;
  ?>
</div>

<div id="goto11" class="menurow">
	<h2>Neapolitan Style Pizza</h2><br>
  <?php
  	echo $neapolitanMenu;
  ?>
</div>

<div id="goto12" class="menurow">
	<h2>Pizza Toppings</h2><br>
  <?php
  	echo $pizzatoppingsMenu;
  ?>
</div>

<div id="goto13" class="menurow">
	<h2>Specialty Toppings</h2><br>
  <?php
  	echo $specialtytoppingsMenu;
  ?>
</div>

<div id="goto14" class="menurow">
	<h2>Specialty Pizza</h2><br>
  <?php
  	echo $specialtypizzaMenu;
  ?>
</div>

<div id="goto15" class="menurow">
	<h2>Desserts</h2><br>
  <?php
  	echo $dessertsMenu;
  ?>
</div>

<div id="goto16" class="menurow">
	<h2>Drinks</h2><br>
  <?php
  	echo $drinksMenu;
  ?>
</div>

<div id="goto17" class="menurow">
	<h2>Full Bar</h2><br>
  <?php
  	echo $barMenu;
  ?>
</div>
</div>
</div>
<div class="top-scrollCon">
<div class ="top-scroll">
<a href="#pge-top"><h4> Back To Top </h4>
<i class="fas fa-arrow-alt-circle-up"></i></a>
</div>
</div>
</div>
</body>
<?php
	echo makeFooter('footer');
?>
</html>
