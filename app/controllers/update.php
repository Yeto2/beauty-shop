<?php

class Update extends Controller{
    
    function index(){

        header("Location:". ROOT ."update/product");
        die;
    }

    function product(){

        $user = $this->loadModel("user");

        if(!$result = $user->check_login()){

            header("Location:". ROOT ."login");
            die;
        }
        if (isset($_POST['update_product'])) {
            
            $update = $this->loadModel('product');
            $update->updateProduct($_POST,$_FILES);
            // header('Location: index.php');
        }

        $data["page_tittle"] = "Update";
        $this-> view("beauty-shop/upload" , $data);

    }

}

?>