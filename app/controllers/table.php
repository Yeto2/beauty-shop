<?php

class Table extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Table";

        $user = $this->loadModel('user');
        $result = $user->get_user();
        $data["user"] = $result;

        $posts = $this->loadModel('posts');
        $dataproduct = $posts->get_all();
        $data["posts"] = $dataproduct;
        
        $this-> view("beauty-shop/tables" , $data);
    }
}

?>