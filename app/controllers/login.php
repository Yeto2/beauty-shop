<?php

class Login extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Login";

        $this-> view("beauty-shop/login" , $data);
    }
}

?>