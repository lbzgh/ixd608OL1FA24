<?php
	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
// print_p($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">

	<title>reCama Store</title>

	<?php include "parts/meta.php" ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>

<body>
	<header>
		<?php include "parts/navbar.php" ?>
	</header>

	<div class="container">
		<h2>Our Products</h2>

		<!-- SERACH -->
		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>

		
		<div class="form-control">
			<div class="card soft">
				<div class="display-flex flex-wrap">
					<!-- FILTER -->
					<div class="flex-stretch display-flex">
						<div class="flex-none">
							<button data-filter="category_1" data-value="" type="button" class="form-button"><small>All</small></button>
						</div>
						<div class="flex-none">
							<button data-filter="category_1" data-value="camera" type="button" class="form-button"><small>Camera</small></button>
						</div>
						<div class="flex-none">
							<button data-filter="category_1" data-value="lens" type="button" class="form-button"><small>Lens</small></button>
						</div>
						<div class="flex-none">
							<button data-filter="category_1" data-value="camera support" type="button" class="form-button"><small>Camera Support</small></button>
						</div>
					</div>

					<!-- SORT -->
					<div class="flex-none">
						<div class="form-select">
							<select class="js-sort">
								<option value="1">New Arrivals</option>
								<option value="2">Earliest Products</option>
								<option value="3">By Discount Rate</option>
								<option value="4">By Category</option>
								<option value="5">Price (High to Low)</option>
								<option value="6">Price (Low to High)</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="productlist grid gap">
		</div>
	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>