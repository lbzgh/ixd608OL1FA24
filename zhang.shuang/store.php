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
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container">		
		
		<h2>Our Products</h2>

		<div class="from-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>

		<div class="from-control display-flex">
			<div class="flex-stretch display-flex">
				<div class="flex-none">
					<button data-filter="ctegory_1" data-value+"" type="button" class="form-button">All</button>
				</div>
				<div class="flex-none">
					<button data-filter="ctegory_1" data-value+"camera" type="button" class="form-button">Camera</button>
				</div>
				<div class="flex-none">
					<button data-filter="ctegory_1" data-value+"lens" type="button" class="form-button">Lens</button>
				</div>
				<div class="flex-none">
					<button data-filter="ctegory_1" data-value+"camera support" type="button" class="form-button">Camera Support</button>
				</div>
			</div>
		</div>

		<div class="flex-none">
			<div class="form-select " style="border: 1px solid var(--color-black)">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Highest Price</option>
					<option value="4">Lowest Price</option>
				</select>
			</div>
		</div>

		<div class="productlist grid gap">
		</div>
	</div>

	<?php include "parts/footer.php"; ?>
</body>
</html>