<?php

Class Posts{

    function get_all(){

        $DB = new Database();
        $query = "select * from products order by id";
        $data = $DB->read($query);

        if(is_array($data)){

            return $data;
        }

        return false;  
    }



}