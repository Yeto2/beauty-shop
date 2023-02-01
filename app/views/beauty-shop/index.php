<?php $this->view("beauty-shop/header",$data); ?>
<!-- end navbar -->

<!-- start hero -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-hero" src="<?=ASSETS?>images/hero1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Get up to 30% Off New Arrivals.</h1>
              <p><a class="btn btn-lg btn-primary" href="#">SHOP NOW</a></p>
            </div>
          </div>
      </div>
      <div class="carousel-item ">
        <img class="middle-hero" src="<?=ASSETS?>images/hero2.png" alt="">
        <div class="container">
          <div class="carousel-caption text-middle">
            <h1>Newsletter.</h1>
            <p>Subscribe to our newsletter and get 20% off your first purchase</p>
            <form action="post">
              <div>
                <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                <button id="newsletter_submit" type="submit" class="btn btn-sm btn-success" value="Submit">subscribe</button>
              </div>
					</form>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="last-hero" src="<?=ASSETS?>images/hero3.png" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Deal Of The Week</h1>
            <div class="timmer">
              <p class="ellipse">8</p>
              <p class="ellipse">12</p>
              <p class="ellipse">22</p>
              <p class="ellipse">33</p>
            </div>
            <p><a class="btn btn-lg btn-primary" href="#">SHOP NOW</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- end hero -->
<!-- start new arrival -->
<section class="container arrivals">
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
			<img src="" alt="" srcset="">
			<div class="prod-info">
				<p class="prod-name">alice</p>
				<p class="prod-price">$$</p>
			</div>
		</div>
	</div>
</section>
<!-- end new arrival -->
<!-- start blog -->
<section id="blog" class="blog container">
			<div class="container">
				<div class="section-header">
					<h2>latest blog</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="<?=ASSETS?>/images/blog1.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="<?=ASSETS?>/images/blog2.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="<?=ASSETS?>/images/blog3.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</section>
<!-- end blog -->
<!-- start footer -->
<?php $this->view("beauty-shop/footer",$data); ?>