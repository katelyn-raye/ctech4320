<?php
	include('menupost.php');
	include('shop_post.php');
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

        <?php
        	echo $_COOKIE['cart'];
        ?>
      </div>
    </div>
    </div>
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
