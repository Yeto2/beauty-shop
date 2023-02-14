<?php

class Arrival extends Controller{
    
    function index(){

        $data["page_tittle"] = "Arrivals";
        $posts = $this->loadModel('posts');
        $result = $posts->get_all();

        $data["posts"] = $result;

        $this-> view("beauty-shop/arrival" , $data);
    }

}

?>