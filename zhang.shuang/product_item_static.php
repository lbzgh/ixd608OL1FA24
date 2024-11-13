<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SZ Product Page</title>

	<?php include "parts/meta.php" ?>
</head>


<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>
	
	<div class="container">
		<div class="card soft">
			<h2>Product Item Page</h2>
			<p>This is item No. <?= $_GET['id'] ?></p>

			<figure class="figure">
					<img src="https://placehold.co/220x360?text=product" alt="Product Image">
					<figcaption>Image Size with a 11:18 Ratio (Close to Golden Raio)</figcaption>
				</figure>
		</div>

		<h2>You may also like</h2>
		<div class="card soft">
			<div class="grid gap">
				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="https://placehold.co/360x220?text=product" alt="Product Image">
						<figcaption>
								<a href="product_item.php?id=1">Product 1</a>
							</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="https://placehold.co/360x220?text=product" alt="Product Image">
						<figcaption>
								<a href="product_item.php?id=2">Product 2</a>
							</figcaption>
					</figure>
				</div>

				<div class="col-xs-12 col-md-4">
					<figure class="figure">
						<img src="https://placehold.co/360x220?text=product" alt="Product Image">
						<figcaption>
								<a href="product_item.php?id=3">Product 3</a>
							</figcaption>
					</figure>
				</div>
			</div>
		</div>

	</div>

</body>


</html>