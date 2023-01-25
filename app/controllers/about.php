<?php

class About extends Controller{
    
    function index(){

        $data["page_tittle"] = "About";
        $this-> view("about" , $data);
    }

}

?>