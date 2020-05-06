<?php
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
				<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>

<body>

    <div class="container-index">
			<div class="background">
      <div class="wrapper">
      <div class="col-lg-12 col-md-12 col-xs-12 header-btn">
        <h1>Bella Vita Italian Restaurant & Bar </h1>
        <h2>Made By Family</h2>
        <p> <strong> Come visit us for great food with a home cooked vibe.</strong>
           <br> 5694 FM 1187
               <br> Rendon, TX 76140
         <br>817-483-0330</p>
        <a href="menutest.php">Order Now!</a>
      </div>
      <div class="col-lg-12 col-md-12 col-xs-12 bio">
        <div class="big-picture">
          <img src="images/image 2.jpg">
        </div>
        <div class="small-picture">
          <img src="images/image 3.jpg">
      </div>
        <div class="col-lg-6 col-md-12 col-xs-12 copy">
        <h2> Our Story</h2>
        <p>Bella Vita II Italian Restaurant & Bar of Rendon, TX is a fantastic family owned and operated restaurant that has a casual and friendly ambiance.<br> Bella Vita I was established in 1998 and first opened in Mansfield, TX and in the year 2001, Bella Vita II was born. Our restaurants offer authentic Italian food prepared by our innovative chefs. We are open every day for breakfast, lunch, and dinner.
        <strong>At Bella Vita Italian Restaurant & Bar, everyone is considered part of the family.</strong> </p>
        </div>
      </div>
      <div class ="favorites">
        <h2>Customer Favorites</h2>
        <div class="favorites-pics">
					<div class="fav-item">
          <div>
          <img src="images/food 1.png" title="pasta for you" alt="This is an image of pasta">
				</div>
				<div>
          <h5>Fettuccine Molto Mio</h5>
          <p>Sun-dried tomatoes, onions, artichoke hearts & mushrooms in a creamy pink sauce</p>
        </div>
			</div>
				<div class="fav-item">
        <div>
          <img src="images/food 2.png" title="pasta for you" alt="This is an image of pasta">
				</div>
				<div>
          <h5>Antipasto Salad</h5>
          <p>Our signiture salad that has been perfected over generations.</p>
        </div>
			</div>
			<div class="fav-item3">
        <div>
          <img src="images/food 3.png" title="pasta for you" alt="This is an image of pasta">
				</div>
				<div>
          <h5>Chicken Luma de Mare</h5>
          <p>Chicken Breast stuffed with shrimp, crabmeat, mushrooms, spinach.</p>
        </div>
        </div>
			</div>
      </div>
    </div>
    </div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#aa0000",
      "text": "#ffdddd"
    },
    "button": {
      "background": "#ff0000"
    }
  },
  "position": "bottom-left"
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script src="basic.js">
</script>;
<?php echo makeFooter('footer'); ?>
</html>
