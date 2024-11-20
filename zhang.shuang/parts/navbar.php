<?php

include_once "lib/php/functions.php";

  ?>

	<div class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>reCama</h1>
			</div>
			<div class="flex-stretch"></div>

		    <nav class="flex-stretch nav">
			    <ul class="container display-flex">
				    <li>
				    	<div class="form-control">
							<form>
								<input type="search" class="hotdog" placeholder="Search">
							</form>
						</div>
				    </li>
				    <li><a href="index.php">Home</a></li>
				    <li><a href="store.php">Store</a></li>
				    <li><a href="account.php">Account</a></li>
				    <li>
				    	<a href="cart.php">
				    		<span>Cart</span>
				    		<span class="badge"><?= makeCartBadge(); ?></span>
						</a>
					</li>
				</ul>
		    </nav>
		</div>
	</div>
