<?php
function makeHeader ($page) {

	$header = '<header>
    <div class ="navbar">
      <button type="button" class="navbar-toggler" data-target="#mainNavigation">
          <i class="fa fa-bars"></i>
      </button>

      <a class="navbar-brand" href="index.html" title="Branding">Brand</a>

    <!-- NAVIGATION-->
      <div id="mainNavigation" class="navbar-collapse">
          <ul class="navbar-nav">
              <li class="navbar-item">
                  <a class="navbar-link" href="index.html" title="Home">Home</a>
              </li>
              <li class="navbar-item">
                  <a class="navbar-link" href="#" title="Menu">Menu</a>
              </li>
              <li class="navbar-item">
                  <a class="navbar-link" href="catering.html" title="Catering">Catering</a>
              </li>
							<li class="navbar-item">
                  <a class="navbar-link" href="reservation.php" title="Reservation">Online Reservation</a>
              </li>
              <li class="navbar-item">
                  <a class="navbar-link" href="contact.html" title="Contact">Contact</a>
              </li>
          </ul>
      </div>
    </div>
    <!-- NAVIGATION End -->
    </header>';

	return $header;
}

?>
