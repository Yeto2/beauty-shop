<?php

class Login extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Login";

        if(isset($_POST["email"])){
            $user=$this->loadModel("user");
            $user->signup($_POST);
        }elseif(isset($_POST["username"]) && !isset($_POST["email"])){
            $user=$this->loadModel("user");
            $user->login($_POST);
        }
        $this-> view("beauty-shop/login" , $data);
    }
}

?>