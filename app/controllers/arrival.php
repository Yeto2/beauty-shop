<?php

class Arrival extends Controller{
    
    function index(){

        $data["page_tittle"] = "Arrivals";
        $this-> view("arrival" , $data);
    }

}

?>