<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];
// print_p($product);
$cart_product = cartItemById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>reCama Added to Cart</title>
	<?php include "parts/meta.php" ?>
</head>

<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container">
		<div class="card soft">
			<h2>Added to cart</h2>
			<p><strong><?= $product->name ?></strong> &nbsp; (&times;<strong><?= $cart_product->amount?></strong>) &nbsp; was added to your cart.</p>
			<br>
			<div class="display-flex">
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="store.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="cart.php">Go to Cart</a></div>
				<div class="flex-stretch"></div>
			</div>
		</div>
	</div>
		<div class="container">
		<h3>You may also like:</h3>
		<?php 
		recommendedAnything(6);
		 ?>
	</div>

	<?php include "parts/footer.php"; ?>	
</body>

</html>