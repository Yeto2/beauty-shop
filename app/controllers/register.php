<?php

class Register extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Register";

        $this-> view("beauty-shop/register" , $data);
    }
}

?>