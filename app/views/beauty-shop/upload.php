<?php $this-> view("beauty-shop/header" , $data); ?>
<style>
    select.form-select {
    margin: 0px 0px 10px;
}
</style>
        
        <section class="form-page">
            <div class="msg">
                <?php check_message() ?>
            </div>
            <div class="form">
                <h4>Upload product</h4>
            <form method="post" enctype="multipart/form-data" name="contactForm" class="customform" method="post">
                
                <div > 
                <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                </div>
                <div> 
                <input name="image" class="subject" type="file" required>
                </div>
                <div> 
                <input name="description" class="subject" type="text" placeholder="description" required>
                </div>
                <div>
                    <select name="categories" class="form-select" aria-label="Default select example">
                        <option selected Disabled>Categorie</option>
                        <option value="clotes">Clotes</option>
                        <option value="accessories">Accessories</option>
                        <option value="makeup">makeup</option>
                    </select>
                </div>
                <div>
                <input name="price" class="subject" type="text" placeholder="Price" title="Price" required>
                </div>
                
                <div><button type="submit">Add Product</button></div>
            </form>
            </div>           
        </section> 
    
<?php $this-> view("beauty-shop/footer" , $data); ?>
