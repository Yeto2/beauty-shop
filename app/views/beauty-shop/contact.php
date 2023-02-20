<?php $this->view("beauty-shop/header",$data)?>
<!-- -------- -->
<style>
    .contact{
    font-size: xx-large;
    padding-top: 140px;    
    

    }
    #con {
        font-size: large;
    }
    .con{
        display: flex;
    justify-content: space-around;
    padding: 60px 0px;
}
    #nemo {
        width: 370px;
        font-size: 15px;
    }
    .flex-container {
        display: flex;
        justify-content: space-around;
        
    }
    .form {
        display: flex;
        flex-direction: column;
        border-radius: 25px;
    }
    textarea {
    background: #f2f2f2;
}

    .form label,input,textarea{
    width: 100%;
    box-sizing: border-box;
    font-size: 16px;

    }

    .form input, textarea {
        border: 1px solid;
        border-radius: 10px;
        padding-left: 10px;
    }
    .form input{
        height: 60px;
    }
    .form label{
        text-indent: 18px;
        color: #a09e9c;
        font-size: large;
    }


    .wrap-sticky nav.navbar.bootsnav.sticked {
        background-color: #EDEAE8;

    }
</style>
<div class="container con">
			<div class="contact">
				<strong id="con">CONTACT US</strong>
				<p id="nemo">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt....</p>
			</div>
			<div class="form">
			
			<input type="text" placeholder=" Full Name">
			<br>
			<input type="text" placeholder=" Email"><br>
			<textarea name="Messege" id="" cols="30" rows="6" placeholder="    Message..."></textarea><br>
			<button class="btn btn-lg btn-success">Submit</button>
			</div>
</div>

<!-- -------- -->
<?php $this->view("beauty-shop/footer",$data)?>