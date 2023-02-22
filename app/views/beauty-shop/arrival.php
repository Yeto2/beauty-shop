<?php $this->view("beauty-shop/header",$data)?>
<!-- end navbar -->

<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Error!</strong>
        <small class="text-muted">11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    <?php check_message() ?>
    </div>
</div>
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
