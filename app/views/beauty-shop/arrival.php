<?php $this->view("beauty-shop/header",$data)?>
<section class="container arrivals">
<div class="section-header">
					<h2>Arrivals</h2>
				</div>
	<div class="categories">
		<ul>
			<li class="item">All</li>
			<li class="item">Clotes</li>
			<li class="item">Accessories</li>
			<li class="item">MakeUp</li>
			<li class="item">Newest</li>
		</ul>
	</div>
	<div class="products">
		<div class="product">
			<img src="<?=ASSETS?>images/products/product1.png" alt="product">
			<div class="prod-info">
				<p class="prod-name">alice</p>
				<p class="dsc">Fujifilm X100T 16 MP Digital Camera (Silver)</p>
				
				<div class="price">
					<p class="new-price">100 $</p>
					<p class="old-price">200 $</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $this->view("beauty-shop/footer",$data)?>
