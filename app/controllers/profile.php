<?php

class Profile extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Profile";

        $user = $this->loadModel('user');
        $result = $user->get_user();
        $data["user"] = $result;

        $this-> view("beauty-shop/profile" , $data);
    }
}

?>