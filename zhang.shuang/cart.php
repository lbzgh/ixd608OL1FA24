<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// $cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1,5,10)");

// print_p($product);

$cart = getCart();
$cart_items = getCartItems();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>reCama Cart</title>

	<?php include "parts/meta.php" ?>
</head>

<body>
	<header>
		<?php include "parts/navbar.php" ?>
	</header>

	<div class="container">
		<h2>Your Shopping Cart</h2>

		<?php

		if(count($cart)){
			?>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate' ) ?> <!-- function($r,$o){return $r."<div>$o->name</div>";} -->

					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<?= cartTotals () ?>
						<div class="card-section">
							<a href="checkout.php" class="form-button">Checkout</a>	
						</div>
					</div>
				</div>
			</div>
			<?php
		} else {
			?>
			<div class="card soft">
				<p>Your Cart Is Empty</p>
			</div>
			<?php
		}
		?>
	</div>

	<div class="container">
		<h3>You may like:</h3>
		<?php 
		recommendedAnything(6);
		 ?>
	</div>

	<?php include "parts/footer.php"; ?>	

</body>


</html>