<?php $this->view("beauty-shop/header",$data)?>

<div class="section-header">
					<h2>Register</h2>
	</div>
<div class="form-page">
        <div class="form">
    <form class="register-form" id="register" method="post">
        <input type="text" name="username" placeholder="name">
        <input type="password" name="password" placeholder="password">
        <input type="email" name="email" placeholder="email address">
        <button>create</button>
        <p class="message">Already registered? <a id="ele" href="<?=ROOT?>login">Sign In</a></p>
    </form>
    </div>
</div>

<?php $this->view("beauty-shop/footer",$data)?>
