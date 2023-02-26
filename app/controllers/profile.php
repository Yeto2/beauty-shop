<?php

class Profile extends Controller{
    
    function index(){
    
        $data["page_tittle"] = "Profile";

        $this-> view("profile/index" , $data);
    }
}

?>