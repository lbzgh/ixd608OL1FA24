<?php

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
// print_p($_SESSION)
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">

	<title>SZ Store</title>

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

			<!-- Search -->
		<div class="display-flex flex-justify-center flex-align-center">	
			<div class="display-inline-flex">
				<div class="form-control">
					<form class="hotdog light" id="product-search">
						<input type="search" placeholder="Search Products">
					</form>
				</div>
			</div>

			<!-- Sort -->

			<div class="display-inline-flex flex-justify-center flex-align-center">
				<div class="form-select">
					<select class="js-sort">
						<option value="1">Latest</option>
						<option value="2">Earliest</option>
						<option value="3">By Discount Rate</option>
						<option value="4">By Category</option>
						<option value="5">Highest Price</option>
						<option value="6">Lowest Price</option>
					</select>
				</div>
			</div>
		</div>
				<!-- Filter -->
				<div class="form-control">
					<div class="flex-stretch display-flex grid gap">
						<div class="inline-flex">
							<button data-filter="category_1" data-value="" type="button" class="form-button"><small>All</small></button>
						</div>
						<div class="flex-none">
							<button data-filter="category_1" data-value="camera" type="button" class="form-button"><small>Camera</small></button>
						</div>
						<div class="flex-none">
							<button data-filter="category_1" data-value="lens" type="button" class="form-button"><small>Lens</small></button>
						</div>
						<div class="flex-none">
							<button data-filter="category_1" data-value="camera support" type="button" class="form-button"><small>Support</small></button>
						</div>
					</div>
				</div>



			
		</div>
	</div>

	<div class="container">

			<div class="display-inline-flex"></div>
			<h2>Our Products</h2>
			<div class="productlist grid gap">
			</div>

	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>