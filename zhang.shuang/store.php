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
</head>

<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container">		
		
			<h2>Our Products</h2>
			<?php

			$result = makeQuery(
				makeConn(),
				"
				SELECT *
				FROM `products`
				ORDER BY `sequence` ASC
				LIMIT 12
				"
			);

			// print_p($result);

			echo "<div class='productlist grid gap'>",array_reduce($result, 'productListTemplate'),"</div>";
			
			?>
	</div>

</body>


</html>