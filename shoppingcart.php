<?php
	include('shop_post.php');
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

</head>
<body>

    <!-- NAVIGATION End -->
		<body>
			<?php echo makeHeader('header'); ?>
			<div class="catering-banner">
				<p><b>We Cater. </b>Want us to be your personal chef for your special event? Call 817-483-0330.</p>
			</div>
			<main>
				<div class="wrapper">
						<div class ="menu-items col-lg-9 col-md-10 col-xs-12">
	<form action='shoppingcart.php' method='post'>
        <?php
        	echo $cartContent;
					?>
      </form>
			<br>
			<p class="centerr">Total: <?php echo $totalPrice;?></p>
		</div>
		<a class="centerr" href="payment_form.php"><button class='addCart'>Check Out</button></a>
		<form action="" method="post">
		<input type="submit" name="deleteAll" value="Delete All" class='addCart centerr'></form>
	</div>
	</main>
</body>

<?php echo makeFooter('footer'); ?>
</html>
