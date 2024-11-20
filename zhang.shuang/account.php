<?php

include_once "lib/php/functions.php";

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SZ Account</title>

	<?php include "parts/meta.php" ?>
</head>


<body>
	<header>
		<?php include "parts/navbar.php" ?>
	</header>

	<div class="container">
		<div class="card soft">
			<h3>Sign Up</h3>
			<form>
				<input type="text" placeholder="Email Address" class="form-input">
				<input type="password" placeholder="Password" class="form-input">
			</form>

			<div class="form-control">
				<button type="button" class="form-button">Log In</button>
				<button type="button" class="form-button">Sign Up</button>
				<button type="button" class="form-button">Forgot Password</button>
			</div>
		</div>
	</div>
</body>


</html>