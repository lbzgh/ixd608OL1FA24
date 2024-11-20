<?php

include_once "lib/php/functions.php";
resetCart();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SZ Payment Confirmation</title>

	<?php include "parts/meta.php" ?>
</head>


<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container">
		<h2>Payment Submitted</h2>
		<div class="card soft">
			<div class="display-flex flex-align-center">
				<div>
					<h3>Thank you four your purchase!</p>
				</div>
			</div>
			<p><a href="store.php" class="form-button">Continue Shopping</a></p>
		</div>
	</div>

</body>


</html>