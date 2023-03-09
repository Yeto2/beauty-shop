<?php

class Update extends Controller{
    
    function index(){

        header("Location:". ROOT ."upload/product");
        die;
    }

    function product(){

        $user = $this->loadModel("user");

        if(!$result = $user->check_login()){

            header("Location:". ROOT ."login");
            die;
        }

        if (isset($_POST['title']) && isset($_FILES['image'])) {
            $upload = $this->loadModel('product');
            $upload->upload($_POST,$_FILES);
        }

        $data["page_tittle"] = "Update";
        $this-> view("beauty-shop/upload" , $data);

    }

}

?>