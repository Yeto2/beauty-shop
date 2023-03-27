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
    function get_once($id){
        $DB = new Database();
        $query = "select * from products where id = $id limit 1";
        $data = $DB->read($query);

        if(is_array($data)){

            return $data;
        }

        return false;  
    }


}