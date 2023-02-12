<?php

Class Product{

    function upload()
    {
        $DB = new Database();
            $_SESSION['error'] = "";

            if(isset($POST['username']) && isset($POST['password'])){
                $arr['username'] = $POST['username'];
                $arr['password'] = $POST['password'];
                $arr['email'] = $POST['email'];
                $arr['url_address'] = generateRandomString(60);
                $arr['date'] = date("Y-m-d H:i:s");


                $query = "insert into users (username,password,email,url_address,date)values (:username, :password, :email, :url_address, :date)";
                $data = $DB->write($query,$arr);
                if($data){
                    header("Location:". ROOT ."login");
                    die;
                }
    }


}}