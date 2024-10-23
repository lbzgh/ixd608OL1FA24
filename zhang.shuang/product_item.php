<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Shuang's Product List</title>

	<?php include "parts/meta.php" ?>
</head>


<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<?php include "parts/filter.php" ?>
	</header>
	
	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>
			<p>This is item No. <?= $_GET['id'] ?></p>

		</div>


	</div>

</body>


</html>