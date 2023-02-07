<?php

class Upload extends Controller{
    
    function index(){

        $data["page_tittle"] = "Upload";
        $this-> view("beauty-shop/Upload" , $data);
    }

}

?>