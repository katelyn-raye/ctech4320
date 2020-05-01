<?php
	include('menupost.php');
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title> Bella Vita Italian Restaurant | Home </title>
    <meta name="description" content="Rendon, TX Italian Family Restaurant">
    <meta name="author" content="Katelyn Needham & Kathryn Kerr">

    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
  <header>
    <div class ="navbar">
		<div class = "responsive-nav">
      <button type="button" class="navbar-toggler" data-target="#mainNavigation">
          <i class="fa fa-bars"></i>
      </button>


      <a class="navbar-brand" href="index.html" title="Branding"><img src="spaghetti.svg" title="logo" alt="logo">Brand</img></a></img>
			</div>

    <!-- NAVIGATION-->
    <div id="mainNavigation" class="navbar-collapse">
        <div class="nav">

        <div class="nav-top">
          <a class="navbar-brand" href="index.html" title="Branding"><img src="spaghetti.svg" title="logo" alt="logo">Brand</img></a></img>
          <h3>Bella Vita II Italian Restaurant & Bar</h3>
          <button class="navbar-shop" href="#" title="Shopping Bag"><img src="shop.png" title="Shopping Bag" alt="Shopping Bag">Shopping Bag</img></button>
        </div>

        <div class="nav-bottom">
          <ul class="nav-bar">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>

      </div>
    </div>

      </div>
    </header>

    <!-- NAVIGATION End -->

    <div class="catering-banner">
      <p><b>We Cater. </b>Want us to be your personal chef for your special event? Call 817-483-0330.</p>
    </div>


    <div class="container-index">
      <div class="wrapper">
      <div class="col-lg-12 col-md-12 col-xs-12 header-btn">
        <h1>Menu </h1>
        <h2>Save Time and Order Online</h2>
        <p> <strong> We now offer online ordering, add to your favorite dishes to the cart and never wait for a meal again.</strong>
      </div>
	<div id="pge-top" class="small-nav">
		<ul>
			<li><a href="#goto1">Appetizers</a></li>
			<li><a href="#goto2">Salads</a></li>
			<li><a href="#goto3">Side Orders</a></li>
			<li><a href="#goto4">Kids Menu</a></li>
			<li><a href="#goto5">Sandwiches</a></li>
			<li><a href="#goto6">Hot Subs</a></li>
			<li><a href="#goto7">Pasta Plus</a></li>
			<li><a href="#goto8">Baked Pasta</a></li>
			<li><a href="#goto9">Chicken Entrees</a></li>
			<li><a href="#goto10">Seafood Entrees</a></li>
			<li><a href="#got011">Neapolitan Style Pizza</a></li>
			<li><a href="#goto12">Pizza Toppings</a></li>
			<li><a href="#goto13">Specialty Toppings</a></li>
			<li><a href="#goto14">Specialty Pizza</a></li>
			<li><a href="#goto15">Desserts</a></li>
			<li><a href="#goto16">Drinks</a></li>
			<li><a href="#goto17">Full Bar</a></li>
		</ul>
	</div>
<main>
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
</main>
</body>

<footer>
    <div class="footerbar">
        <div class="container-fluid footer-info">
            <div class="row footer-row">
                <div class="footer-company-address col-xs-6 col-sm-6 col-lg-12">
                    <section>
                        <h5>

          <strong>Bella Vita Italian Restaurant & Bar </strong>
             <br> 5694 FM 1187
                 <br> Rendon, TX 76140
           <br>817-483-0330
           <br><a href="mailto:#">info@bellavita.com</a>
        </h5>
                    </section>

                </div>

                <div class="footer-social-list col-xs-6 col-sm-6 col-lg-12">
                    <ul class="social-contact-nav">
                        <li class="social-contact-item">
                            <a class="social-contact-link" href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li class="social-contact-item">
                            <a class="social-contact-link" href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="social-contact-item">
                            <a class="social-contact-link" href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="row">
                <div class="footer-sitemap-allpage">
                    <ul class="footer-nav">
                        <li><strong>Sitemap</strong></li>
                        <li><a class="footer-link" href="index.html" title="Home">Home</a></li>
                        <li><a class="footer-link" href="careers.html" title="Menu">Menu</a></li>
                        <li><a class="footer-link" href="about.html" title="Catering">Catering</a></li>
                        <li><a class="footer-link" href="careers.html" title="contact">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</footer>
</html>
