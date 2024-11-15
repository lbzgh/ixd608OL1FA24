<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (1,5,10)");

// print_p($product);

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>SZ Cart</title>

	<?php include "parts/meta.php" ?>
</head>


<body>
	<header>
		<?php include "parts/navbar.php" ?>
		<!-- <?php include "parts/filter.php" ?> -->
	</header>

	<div class="container">
		<h2>Your Shopping Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-1">
				
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="card soft">
					<?= array_reduce($cart,'cartListTemplate' ) ?> <!-- function($r,$o){return $r."<div>$o->name</div>";} -->

				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft flat">
					<div class="card-section display-flex">
						<div class="flex-stretch">
							<strong>Sub Total:</strong>
						</div>
						<div class="flex-none">
							&dollar;12345.67
						</div>
					</div>
					<div class="card-section display-flex">
						<div class="flex-stretch">
							<strong>Taxes:</strong>
						</div>
						<div class="flex-none">
							&dollar;1234.56
						</div>
					</div>
					<div class="card-section display-flex">

						<div class="flex-stretch">
							<strong>Total:</strong>
						</div>
						<div class="flex-none">
							&dollar;13580.24
						</div>
					</div>
					<div class="card-section">
						<a href="checkout.php" class="form-button">Checkout</a>	
					</div>
				</div>
			</div>
		</div>

<!-- 		<hr>
			<div class="display-flex flex-align-center">
				<div>
					
				</div>
			</div>
			<div class="article-body">
				<p>List of produts in your shopping cart:</p>
			</div>

		<script>
		const makeTable = (classes='') => {
		    const head = ['ID','Name','QTY','Price','Amount'];
		    const body = [
		        ['Camera','2','100.00','200.00'],
		        ['Tripod','2','100.00','200.00'],
		        ['Filter','2','100.00','200.00'],
		        ['Lens','2','100.00','200.00'],
	    	];

	    document.write(`
	    <table class="${classes}">
	        <thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
	        <tbody>${body.reduce((r,o,i)=>r+
	            `<tr>${
	                [i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
	            }</tr>`,'')
	        }</tbody>
	    </table>
	    `);
		}
		</script>

		<script>makeTable("table table-striped")</script>
		
		<br>
		<div class="display-flex">
			<div class="flex-stretch"><p>Total Price: USD $###.##</p></div>
			<div class="flex-stretch"><a href="checkout.php" class="form-button">Checkout</a></div>
		</div> -->
	</div>

</body>


</html>