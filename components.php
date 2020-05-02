<?php
function makeHeader ($page) {

	$header = '<header>
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
      <p>Bella Vita II Italian Restaurant & Bar</p>
      <img src="Artboard 1.png" alt="" title="">
    </div>

    <div class="nav-bottom">
      <ul class="nav-bar">
        <li><a href="index.php">Home</a></li>
        <li><a href="menutest.php">Menu</a></li>
        <li><a href="reservation.php">Reservation</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>

  </div>
</div>

    <!-- NAVIGATION End -->
    </header>';

	return $header;
}

?>
