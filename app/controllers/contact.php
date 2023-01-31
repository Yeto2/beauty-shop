<?php

class Contact extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Contact Us";

        $this-> view("beauty-shop/contact" , $data);
    }
}

?>