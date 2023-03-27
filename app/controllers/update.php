<?php

class Update extends Controller{
    
    function index(){
        // $this-> view("beauty-shop/update" , $data);
        header("Location:". ROOT ."update/product?id=".$_GET['id']);
        die;
    }

    function product(){

        // -----check login
            $user = $this->loadModel("user");
            if(!$result = $user->check_login()){

                header("Location:". ROOT ."login");
                die;
            } 

        // ----- get products data 
            $posts = $this->loadModel('posts');
            $dataproduct = $posts->get_once($_GET['id']);
            $data["posts"] = $dataproduct;


        // -------- load update model
            if (isset($_POST['update_product'])) {
                $update = $this->loadModel('product');
                $update->updateProduct($_POST,$_FILES);
            }

            $data["page_tittle"] = "Update";
            $this-> view("beauty-shop/update" , $data);

    }

}

?>