<?php

class Delete extends Controller{
    
    
function index(){
    
    $product_id = $_POST['id'];
    $data['$product_id'] = $product_id
    // $product_model = $this->loadModel('Product');
    // $product_model->delete($product_id);
    $this-> view("beauty-shop/tables" , $data);

}
}


?>