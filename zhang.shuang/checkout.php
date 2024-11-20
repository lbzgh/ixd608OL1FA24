<?php

include_once "lib/php/functions.php";

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SZ Checkout Page</title>

	<?php include "parts/meta.php" ?>
</head>
 
<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container card soft">
		<div class="display-flex flex-align-center">
			<div>
				<h2>Checkout Page</h2>
			</div>
		</div>
		<div class="display-flex">
			<div class="flex-stretch"></div>
			<div class="flex-stretch"></div>
			<div class="flex-none"><p>Total Amount: USD $###.##</p></div>
			<div class="flex-stretch"></div>
		</div>
		<h3 id="controls">Mailing Address</h3>
		<form>
			<div class="form-control">
				<label for="address-street" class="form-label">Street</label>
				<input id="address-street" type="text" placeholder="Street Name" class="form-input">
			</div>

			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
						<label for="address-city" class="form-label">City</label>
						<input id="address-city" type="text" placeholder="City" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
						<label for="address-state" class="form-label">State (Province)</label>
						<input id="address-state" type="text" placeholder="State" class="form-input">
					</div>
				</div>
			</div>

			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
						<label for="address-zip" class="form-label">ZIP Code (Postcode)</label>
						<input id="address-zip" type="text" placeholder="ZIP Code" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
						<label for="address-country" class="form-label">Country</label>
						<input id="address-country" type="text" placeholder="Country" class="form-input">
					</div>
				</div>
			</div>

			<br>
			<h3 id="controls">Credit Card</h3>
			<div class="form-control">
				<label for="paycard-name" class="form-label">Name on Card</label>
				<input id="paycard-name" type="text" placeholder="Name" class="form-input">
			</div>

			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
						<label for="paycard-number" class="form-label">Card Number</label>
						<input id="paycard-number" type="text" placeholder="####-####-####-####" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
						<label for="paycard-cvv" class="form-label">CVV (Card Verification Value)</label>
						<input id="paycard-cvv" type="text" placeholder="###" class="form-input">
					</div>
				</div>
			</div>

			<div class="form-control">
				<div class="grid gap">
					<div class="col-xs-12 col-md-6">
						<label for="paycard-expire" class="form-label">Expiration</label>
						<input id="paycard-expire" type="text" placeholder="MM-YY" class="form-input">
					</div>
					<div class="col-xs-12 col-md-6">
						<label for="paycard-zip" class="form-label">ZIP Code (Postcode) of Your Card</label>
						<input id="paycard-zip" type="text" placeholder="ZIP Code" class="form-input">
					</div>
				</div>
			</div>

			<div class="display-flex">
				<div><p><a href="cart.php">Back</a></p></div>
				<div class="flex-stretch"></div>
				<div class="flex-stretch">
					<div class="form-control">
					<!-- <input type="submit" class="form-button" value="Submit Payment"> -->
					<a href="checkout_confirm.php" class="form-button">Submit Payment</a>
					</div>
				</div>
			</div>

			
		</form>
	</div>
</body>

</html>