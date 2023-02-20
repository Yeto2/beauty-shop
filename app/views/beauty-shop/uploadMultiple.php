<?php $this-> view("beauty-shop/header" , $data); ?>
<style>
    select.form-select {
    margin: 0px 0px 10px;
    }
    .form {
    max-width: none !important;
    }
    .form-page {
    width: unset;
    }
    #file{
        padding: 12px !important;
    }
    .twoele {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.subbtn {
    display: flex;
    justify-content: flex-end;
}
.form button {
    width: unset;
}
.twoele div {
    width: 100%;
}
.twoele div:not(:first-child) {
    padding-left: 20px;
}
.form{
    padding: 30px;
}
button {
    margin-left: 5px;
}
</style>
        
        <section class="form-page container">
        
        <div class="section-header">
                    <h2>Upload Multiple products</h2>
        </div>
        <div class="form">
            <form method="post" enctype="multipart/form-data" name="contactForm" class="customform" method="post">
                
                <div class="twoele">
                    <div> 
                        <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                    </div>
                    <div> 
                        <input id="file" name="image" class="subject" type="file" required>
                    </div>
                    <div>
                        <input name="price" class="subject" type="text" placeholder="Price" title="Price" required>
                    </div>
                    <div>
                        <select style="padding: 12.5px;" name="categories" class="form-select" aria-label="Default select example">
                            <option selected Disabled>Categorie</option>
                            <option value="clotes">Clotes</option>
                            <option value="accessories">Accessories</option>
                            <option value="makeup">makeup</option>
                        </select>
                    </div>
                </div>
                <div> 
                    <input name="description" class="subject" type="text" placeholder="description" required>
                </div>
                <!-- submit btn -->
                <div class="subbtn">
                    <button type="submit" class="btn btn-success">Add Product</button>
                    <button type="submit" class="btn btn-primary">Add More</button>
                </div>
            </form>
            </div>           
        </section> 
    <script>
        window.onload = function() {
    
}
    </script>
<?php $this-> view("beauty-shop/footer" , $data); ?>
