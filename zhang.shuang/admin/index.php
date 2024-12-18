<?php 

include "../lib/php/functions.php";

$empty_product = (object)[
	"name"=>"Action Camera",
	"color"=>"Black",
	"price"=>"400.00",
	"quantity"=>"100",
	"category_1"=>"Camera",
	"description"=>"Cool action camera to capture everything around it.",
	"image_main"=>"Insta360_GO3.png",
	"images"=>"Insta360_GO3.png",
	
];

// LOGIC

try {
	$conn = MakePDOConn();
	$action = $_GET['action'] ?? 'default';
	switch($action) {
		case 'update':
			$statement = $conn->prepare("UPDATE
				`products`
				SET
					`name`=?,
					`color`=?,
					`price`=?,
					`quantity`=?,
					`category_1`=?,
					`description`=?,
					`image_main`=?,
					`images`=?,
					`date_modify`=NOW()
				WHERE `id`=?	
				");
			$statement->execute([
				$_POST['product-name'],
				$_POST['product-color'],
				$_POST['product-price'],
				$_POST['product-quantity'],
				$_POST['product-category_1'],
				$_POST['product-description'],
				$_POST['product-image_main'],
				$_POST['product-images'],
				$_GET['id']
			]);
			header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
			break;
		

		case "create":
		$statement = $conn->prepare("INSERT INTO
				`products`
				(
					`name`,
					`color`,
					`price`,
					`quantity`,
					`category_1`,
					`description`,
					`image_main`,
					`images`,
					`date_create`,
					`date_modify`
				)
				VALUES(?,?,?,?,?,?,?,?,NOW(),NOW())
				");
		$statement->execute([
				$_POST['product-name'],
				$_POST['product-color'],
				$_POST['product-price'],
				$_POST['product-quantity'],
				$_POST['product-category_1'],
				$_POST['product-description'],
				$_POST['product-image_main'],
				$_POST['product-images']
		]);
			$id = $conn->lastInsertId();
			header("location:{$_SERVER['PHP_SELF']}?id=$id");
			break;

		case 'delete':
			$statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
			$statement->execute([$_GET['id']]);
			header("location:{$_SERVER['PHP_SELF']}");
			break;
	}
} catch(PDOException $e) {
	die($e->getMessage());
}




// TEMPLATES ($r: reducer)
function productListItem($r,$o) {
return $r.<<<HTML
<container>
	<div class="card hard">
		<div class="display-flex">
			<div class="flex-none img-more">
				<img src="img/img_product/$o->image_main">
			</div>
			<div class="flex-stretch" style="padding: 1em;">
				$o->name
			</div>
			<div class="flex-none">
				<a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a>
			</div>
		</div>
	</div>
</container>
HTML;
}



function showProductPage($o) {
	
$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$images = array_reduce(explode(",", $o->images),function($r,$o){return $r."<img src='img/img_product/$o'>";});

// heredoc
$display = <<<HTML
<div>
	<h2>$o->name</h2>
	<div class="form-control">
		<label class="form-label">Price</label>
		<span>&dollar;$o->price</span>
	</div>
	<div class="form-control">
		<label class="form-label">Quantity</label>
		<span>$o->quantity</span>
	</div>
	<div class="form-control">
		<label class="form-label">Category_1</label>
		<span>$o->category_1</span>
	</div>
	<div class="form-control">
		<label class="form-label">Description</label>
		<span>$o->description</span>
	</div>
	<div class="form-control">
		<label class="form-label">Main Image</label>
		<span class="img-more"><img src='img/img_product/$o->image_main'></span>
	</div>
	<div class="form-control">
		<label class="form-label">More Images</label>
		<span class="img-more">$images</span>
	</div>
</div>
HTML;

$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit Product</h2>
	<div class="form-control">
		<label class="form-label" for="product-name">Name</label>
		<input class="form-input" name="product-name" id="product-name" type="text" value="$o->name" placeholder="Enter the Product Name">
	</div>

	<div class="form-control">
		<label class="form-label" for="product-color">Color</label>
		<input class="form-input" name="product-color" id="product-color" type="text" value="$o->color" placeholder="Enter the Product Color">
	</div>

	<div class="form-control">
		<label class="form-label" for="product-price">Price</label>
		<input class="form-input" name="product-price" id="product-name" type="Number" min="0" max="1000" step="0.01" value="$o->price" placeholder="Enter the Product Price">
	</div>

	<div class="form-control">
		<label class="form-label" for="product-quantity">Quantity</label>
		<input class="form-input" name="product-quantity" id="product-name" type="Number" min="0" max="10000" step="1" value="$o->quantity" placeholder="Enter the Product Quantity">
	</div>

	<div class="form-control">
		<label class="form-label" for="product-category_1">Category</label>
		<input class="form-input" name="product-category_1" id="product-category_1" type="text" value="$o->category_1" placeholder="Enter the Product Category">
	</div>

	<div class="form-control">
		<label class="form-label" for="product-description">Description</label>
		<textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
	</div>

	<div class="form-control">
		<label class="form-label" for="product-image_main">Main Image</label>
		<input class="form-input" name="product-image_main" id="product-image_main" type="text" value="$o->image_main" placeholder="Enter the Main Image">
	</div>

	<div class="form-control">
		<label class="form-label" for="product-images">More Images</label>
		<input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the Product Images">
	</div>

	<div class="form-control">
		<input class="form-button" type="submit" value="Save Changes">
	</div>
</form>
HTML;

$output = $id == "new" ? "<div class='card hard'>$form</div>" :
	"<div class='grid gap'>
		<div class='col-xs-12 col-md-7'><div class='card hard'>$display</div></div>
		<div class='col-xs-12 col-md-5'><div class='card hard'>$form</div></div>
	</div>
	";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<div class='card hard'>
	<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
	</nav>
</div>
$output 
HTML;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SZ Product Admin Page</title>

	<?php include "../parts/meta.php" ?>
</head>

<body>
	<header>
		<div class="navbar">
			<div class="container display-flex">
				<div class="flex-none">
					<h1>Product Admin</h1>
				</div>
				<div class="flex-stretch">
				</div>
				<nav class="nav nav-flex flex-none">
					<ul>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
						<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="container">

		<?php 
		if(isset($_GET['id'])) {
			showProductPage(
				$_GET['id']=="new" ?
					$empty_product :
					makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);

			// showProductPage( );
		} else {

		?>
		<h2>Product List</h2>
		<?php

		$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");


		echo array_reduce($result,'productListItem');
		
		?>

	<?php } ?>

	</div>

	<?php include "../parts/footer.php"; ?>	

</body>


