<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

// $cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1,5,10)");

// print_p($product);

$cart_items = getCartItems();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SZ Cart</title>

	<?php include "parts/meta.php" ?>
</head>

<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container">
		<h2>Your Shopping Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-1">
				
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartListTemplate' ) ?> <!-- function($r,$o){return $r."<div>$o->name</div>";} -->

				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft flat">
					<?= cartTotals () ?>
				</div>
			</div>
		</div>

	</div>

</body>


</html>