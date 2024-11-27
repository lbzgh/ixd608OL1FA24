<?php

include_once "lib/php/functions.php";

  ?>

	<div class="navbar">
    <div class="container display-flex">
        <div class="flex-none mobile-menu-toggle">
            <button class="hamburger">☰</button>
        </div>
        <div class="flex-none">
            <h1>reCama</h1>
        </div>
        <div class="flex-stretch"></div>

        <nav class="flex-stretch nav mobile-menu">
          <ul class="container display-flex">
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
	</div>

<!-- Trying to add Hamburger Menu -->
	<script>
	document.querySelector('.hamburger').addEventListener('click', function() {
	    document.querySelector('.mobile-menu').classList.toggle('show-mobile-menu');
	});
	</script>
