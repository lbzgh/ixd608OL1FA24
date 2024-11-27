const listItemTemplate = templater (o=>`
	<a class="col-xs-6 col-md-3" href="product_item.php?id=${o.id}">
		<figure class="figure product display-flex flex-column">
			<div class="flex-stretch">
				<img src="img/img_product/${o.image_main}" alt="Product Image">
			</div>
			<figcaption class="flex-none"> 
				<div>&dollar;${o.price.toFixed(2)}</div>
				<div><strong>${o.name}</strong></div>
			</figcaption>
		</figure>
	</a>
`); 