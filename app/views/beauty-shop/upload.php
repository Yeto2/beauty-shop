<?php $this-> view("beauty-shop/header" , $data); ?>

        
        <section class="form-page">
            <div class="form">
                <h4>Upload product</h4>
            <form method="post" enctype="multipart/form-data" name="contactForm" class="customform" method="post">
                
                <div > 
                <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                </div>
                <div> 
                <input name="file" class="subject" type="file" required>
                </div>
                <div> 
                <input name="description" class="subject" type="text" required>
                </div>
                <div>
                <input name="price" class="subject" type="text" placeholder="Price" title="Price" required>
                </div>
                <div><button type="submit">Submit Button</button></div>
            </form>
            </div>           
        </section> 
    
<?php $this-> view("beauty-shop/footer" , $data); ?>
