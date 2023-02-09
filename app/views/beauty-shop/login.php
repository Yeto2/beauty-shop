<?php $this->view("beauty-shop/header",$data)?>

<div class="section-header">
		<h2>Login</h2>
</div>
<div class="msg">
    <?php check_message() ?>
</div>
<div class="form-page">
    <div class="form">
    <form class="login-form" id="login" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button>login</button>
        <p class="message">Not registered? <a id="ele2" href="<?=ROOT?>register">Create an account</a></p>
    </form>
    </div>
</div>
<?php $this->view("beauty-shop/footer",$data)?>