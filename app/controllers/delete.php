<?php

class Delete extends Controller{
    
    
function delete(){
    
    $product_id = $_GET['id'];
    $product_model = $this->loadModel('Product');
    $product_model->delete($product_id);
    header('Location: /products/list');
}
}
