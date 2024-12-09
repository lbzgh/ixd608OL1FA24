<?php

include_once "lib/php/functions.php";

?>

<input type="checkbox" id="menu" class="hidden">
<div class="navbar">
  <div class="container display-flex">
    <div class="flex-none">
        <h1><a href="index.php">reCama</a></h1>
    </div>

    <div class="flex-stretch">
    </div>

    <div class="flex-none menu-button">
      <label for="menu">&equiv;</label>
    </div>

    <nav class="nav nav-flex flex-none">
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

