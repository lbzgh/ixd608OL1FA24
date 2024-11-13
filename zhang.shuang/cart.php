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

	<div class="container card soft">
		
		<article class="article" id="article1">
			<div class="display-flex flex-align-center">
				<div>
					<h2>Your Shopping Cart</h2>
				</div>
			</div>
			<div class="article-body">
				<p>List of produts in your shopping cart:</p>
			</div>
		</article>

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
		</div>
	</div>

</body>


</html>