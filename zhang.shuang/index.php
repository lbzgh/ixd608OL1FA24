<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>reCama Home</title>

	<?php include "parts/meta.php" ?>
</head>

<body>
	<header>
		<?php include "parts/navbar.php" ?>
	</header>

		<div class="view-window" style="background-image: url('img/lens01-logo-1920x1080.jpg')">
		</div>


	<div class="container">
		<div class="card soft">
			<div class="display-flex flex-align-center">
				<div>
					<h1>Online Camera Mall</h1>
				</div>
				<div class="flex-none">
					<small></small>
				</div>
			</div>
			<div>
				<p>Welcome to reCama, your one-stop online shopping mall of camera gears.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<h2>Holiday Sale</h2>
		<?php 
		recommendedAnything(3);
		 ?>
	</div>

	<div class="container">
		<div class="card soft">
			<h2>Cameras</h2>
			<div class="grid gap">
				<div class="col-xs-6">
					<figure class="figure product-overlay">
						<a href="store.php">
							<img src="img/camera01.jpg" alt="Image of Digital Camera">
							<figcaption> 
								<div class="caption-body">
									<div>Digital Cameras</div>
								</div>
							</figcaption>
						</a>
					</figure>
					<p>Discover a world of photographic possibilities with our curated selection of digital cameras. From compact point-and-shoots to professional DSLRs, we've got the perfect camera meeting your needs.</p>
				</div>

				<div class="col-xs-6" href="store.php">
					<figure class="figure product-overlay">
						<a href="store.php">
							<img src="img/camera02.jpg" alt="Image of Vintage Camera">
							<figcaption> 
								<div class="caption-body">
									<div>Film Cameras</div>
								</div>
							</figcaption>
						</a>
					</figure>
					<p>Step back in time with our collection of classic film cameras, and rediscover the art of film photography. From 35mm SLRs to instant cameras, our selection of vintage and modern film cameras captures memories that last a lifetime.</p>
				</div>
			</div>
			<div class="container">
				<h2>Popular Cameras</h2>
				<?php 
				recommendedCategory("Camera");
				 ?>
			</div>
		</div>

		<div class="card soft">
			<h2>Lenses</h2>
			<div class="grid gap">
				<div class="col-xs-12">
					<figure class="figure product-overlay">
						<a href="store.php">
							<img src="img/lens01.jpg" alt="Image of Lenses">
							<figcaption> 
								<div class="caption-body">
									<div>Lenses</div>
								</div>
							</figcaption>
						</a>
					</figure>
					<p>Expand Your Creative Vision with Our Lens Collection. From wide-angle to telephoto, prime to zoom, we have the perfect lens to capture your unique perspective. Whether you're a budding photographer or a seasoned pro, our lenses help to get an exceptional optical performance with versatile focal lengths.</p>
				</div>
			</div>
			
			<div class="container">
				<h2>Popular Lenses</h2>
				<?php 
				recommendedCategory("Lens");
				 ?>
			</div>
		</div>
	</div>

	<div class="view-window" style="background-image: url('img/camera03.jpeg')">
	</div>

	<div class="container">

		<div class="card soft">
			<h2>Camera Support</h2>
			<div class="grid gap">
				<div class="col-xs-6">
					<figure class="figure product-overlay">
						<a href="store.php">
							<img src="img/tripod01.jpg" alt="Image of Tripod">
							<figcaption> 
								<div class="caption-body">
									<div>Tripods</div>
								</div>
							</figcaption>
						</a>
					</figure>
					<p>Ensure sharp, stable images with our collection of high-quality tripods. From lightweight travel tripods to sturdy studio tripods, we have the perfect solution for any photographer.</p>
				</div>

				<div class="col-xs-6">
					<figure class="figure product-overlay">
						<a href="store.php">
							<img src="img/monopod01.jpg" alt="Image of Monopod">
							<figcaption> 
								<div class="caption-body">
									<div>Monopods</div>
								</div>
							</figcaption>
						</a>
					</figure>
					<p>Monopods offer the perfect balance of portability and stability. Lightweight and easy to carry, they're ideal for taking sharp, clear photos and videos when handheld.</p>
				</div>
			</div>

			<div class="container">
				<h2>Popular Supporting Gears</h2>
				<?php 
				recommendedCategory("Camera Support");
				 ?>
			</div>
		</div>
	</div>
</div>

<?php include "parts/footer.php" ?>

</body>

</html>