<?php

include_once "lib/php/functions.php";
// include_once "parts/templates.php";
$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
// print_p($product);
$cart_product = cartItemById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SZ Added to Cart</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container">
		<div class="card soft">
			<h2>This was added to your cart:</h2>
			<h3><?= $product->name ?>.</h3>
			<p>There is/are <strong><?= $cart_product->amount?></strong> of <strong><?= $product->name ?>s</strong> in your cart.</p>
			<div class="display-flex">
				<div class="flex-none"><a href="store.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="cart.php">Go to Cart</a></div>
			</div>
		</div>
	</div>
</body>

</html>