<?php

class Delete extends Controller{
    
    function index(){
            
        $data["page_tittle"] = "Table";

        $id = $_GET['id'];
    
        $user = $this->loadModel('user');
        $result = $user->get_user();
        $data["user"] = $result;

        $posts = $this->loadModel('posts');
        $dataproduct = $posts->get_all();
        $data["posts"] = $dataproduct;


        // -----

        $product_model = $this->loadModel('product');
        $product_model->delete($id);
        $this-> view("beauty-shop/tables" , $data);
    }
}
?>
