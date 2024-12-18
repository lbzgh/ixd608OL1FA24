<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/img_product/$o'>";
});
// print_p($_SESSION);
// print_p($product);
// print_p is defined in functions.php
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>reCama Product Details</title>

	<?php include "parts/meta.php" ?>
	<script type="text/javascript" src="js/product_images.js"></script>
</head>


<body class="flush">
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>
	

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="img-main">
						<img src="img/img_product/<?= $product->image_main ?>" alt="Product Image">
					</div>
					<div class="img-more">
						<?= $image_elements ?>
					</div>
				</div>			
			</div>

			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">
					
					<input type="hidden" name="product-id" value="<?= $product->id ?>">

					<div class="card-section">
						<h2 class="product-name"><?= $product->name ?></h2>
						<p>Brand: <?= $product->brand ?></p>
						<p>Model: <?= $product->model ?></p>
						<p>Category: <?= $product->category_1 ?>, <?= $product->category_2 ?></p>
						<p class="text-color-5">Stock ID: <?= $_GET['id'] ?></p>
					</div>
					<div class="card-section">
						<div class="product-price">
							<p class="text-color-13"><?= $product->deal ?></p>
							<p> <s>&dollar;<?= $product->price ?></s></p>
							<strong>&dollar;<?= $product->price_now ?> Now (<?= $product->discount ?> Applied)</strong>

							
						</div>
					</div>
					<div class="card-section">
						<label for="product-amount" class="form-label">Amount:</label>
						<div class="form-select">
							<!-- id is for front-end; name is for back-end. -->
							<select id="product-amount" name="product-amount"> 
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
					</div>
					<div class="form-control display-flex">
						<input type="submit" class="form-button" value="Add to Cart">
					</div>
				</form>			
			</div>		
		</div>

		<div class="card soft dark">
			<p> <?= $product->description ?> </p>
		</div>
		<h3 class="text-color-10">You may also like:</h3>
		<?php 
		recommendedSimilar($product->category_1,$product->id);
		?>
	</div>

	<?php include "parts/footer.php"; ?>

</body>

</html>