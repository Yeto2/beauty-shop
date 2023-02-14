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
	<?php if (is_array($data['posts'])): ?>
		<div class="prod-list">
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
			<?php foreach ($data['posts'] as $key):?>
			<div class="products">
				<div class="product">
					<img src="<?=ROOT?><?=$key->image?>" alt="product">
					<div class="prod-info">
						<p class="prod-name"><?=$key->title?></p>
						<p class="dsc"><?=$key->description?></p>
						
						<div class="price">
							<p class="new-price"><?=$key->price?></p>
							<p class="old-price"><?=$key->price?></p>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
			
	<?php endif; ?>

</section>
<?php $this->view("beauty-shop/footer",$data)?>
