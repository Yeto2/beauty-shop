<?php $this-> view("beauty-shop/header" , $data); ?>
<style>
    select.form-select {
    margin: 0px 0px 10px;
}

</style>
        
        <section class="form-page">
        
        <div class="section-header">
                    <h2>Upload product</h2>
        </div>
        <div class="form">
            <form method="post" enctype="multipart/form-data" name="contactForm" class="customform" method="post">
            <?php foreach ($data['posts'] as $key3):?>
                
                <div > 
                <input name="title" class="subject" placeholder="Title" title="Title" value="<?=$key3->title?>" type="text" required>
                </div>
                <div class="ll"> 
                    <style>
                        input.subject.bb {
                        width: 122px;
                        padding: 0px;
                        margin: 20px;
                    }
                    .ll {
                        display: flex;
                        align-items: center;
                        justify-content: space-around;
                    }
                    .old-img {
                        width: 70px;
                    }
                    </style>
                <input name="image" class="subject bb" type="file" value="<?=$key3->image?>" required>
                <img src="<?=ROOT?><?=$key3->image?>" alt="old" class="old-img">
                </div>
                <div> 
                <input name="description" class="subject" type="text" placeholder="description" value="<?=$key3->description?>" required>
                </div>
                <div>
                    <select name="categories" class="form-select" value="images/products<?=$key3->categories?>" aria-label="Default select example">
                        <option selected Disabled>Categorie</option>
                        <option value="clotes">Clotes</option>
                        <option value="accessories">Accessories</option>
                        <option value="makeup">makeup</option>
                    </select>
                </div>
                <div>
                <input name="price" class="subject" type="text" placeholder="Price" title="Price" value="<?=$key3->price?>" required>
                </div>
                
                <div><button type="submit" class="btn btn-success">Add Product</button></div>
                
                <?php endforeach; ?>
            </form>
            </div>           
        </section> 
<?php $this-> view("beauty-shop/footer" , $data); ?>

                            <?php foreach ($data['posts'] as $key3):?>
                                <div class="twoele">
                                    <div> 
                                        <input name="title" class="subject" placeholder="Title" title="Title" type="text" value="<?=$key3->title?>" required>
                                    </div>
                                    <div> 
                                        <input id="file" name="image" class="subject" type="file" value="<?=$key3->image?>" required>
                                    </div>
                                    <div>
                                        <input name="price" class="subject" type="text" placeholder="Price" title="Price" value="<?=$key3->price?>" required>
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
                                    <input name="description" class="subject" type="text" placeholder="description" value="<?=$key3->description?>" required>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    