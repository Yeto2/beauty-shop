<?php

class Upload extends Controller{
    
    function index(){

        header("Location:". ROOT ."upload/product");
        die;
    }

    function product(){

        $user = $this->loadModel("user");

    if(!$result = $user->checklogin()){

        header("Location:". ROOT ."login");
        die;
    }

    }

}

?>