<?php

class Upload extends Controller{
    
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
    $data["page_tittle"] = "Upload | Furniture";
        $this-> view("beauty-shop/upload" , $data);

    }

}

?>