<?php

    class  User
    {
        function login($POST){
            $DB = new Database();
            $_SESSION['error'] = "";

            if(isset($POST['username']) && isset($POST['password'])){
                $arr['username'] = $POST['username'];
                $arr['password'] = $POST['password'];

                $query = "select * from users where username = :username && password = :password limit 1";
                $data = $DB->read($query,$arr);
                if(is_array($data)){
                    // logged in
                    $_SESSION['user_name'] = $data[0]->username;
                    $_SESSION['user_url'] = $data[0]->url_address;

                    header("Location:". ROOT ."home");
                    die;
                }else {
                    $_SESSION['error'] = "wrong username or password";
                }


            }else {
                $_SESSION['error'] = "please enter a valid username and password";
            }
        }



        function signup($POST){
            $DB = new Database();
            $_SESSION['error'] = "";

            if(isset($POST['username']) && isset($POST['password'])){
                $arr['username'] = $POST['username'];
                $arr['password'] = $POST['password'];
                $arr['email'] = $POST['email'];
                $arr['url_address'] = generateRandomString(60);
                $arr['date'] = date("Y-m-d H:i:s");
                // to check
                $arr_check['email'] = $POST['email'];
                $arr_check['username'] = $POST['username'];


                // ---------
                $query_check = "select * from users where username = :username || email = :email";
                $data_exist = $DB->read($query_check,$arr_check);
                if(is_array($data_exist)){
                    $_SESSION['error'] = "email or username are already exist !";
                }else {
                    $query = "insert into users (username,password,email,url_address,date)values (:username, :password, :email, :url_address, :date)";
                        $data = $DB->write($query,$arr);
                        if($data){
                            header("Location:". ROOT ."login");
                            die;
                        }else {
                        $_SESSION['error'] = "please enter a valid username and password";
                    }
                }

                
        }}


        function check_login()
        {
    
            $DB = new Database();
            if(isset($_SESSION['user_url']))
            {
    
                $arr['user_url'] = $_SESSION['user_url'];
    
                $query = "select * from users where url_address = :user_url limit 1";
                $data = $DB->read($query,$arr);
                if(is_array($data))
                {
                    //logged in
                        $_SESSION['user_name'] = $data[0]->username;
                    $_SESSION['user_url'] = $data[0]->url_address;
    
                    return true;
                }
            }
    
            return false;
    
        }

        function get_user(){

            $DB = new Database();
            $query = "select * from users order by id";
            $data = $DB->read($query);
    
            if(is_array($data)){
    
                return $data;
            }
    
            return false;  
        }

        function logout(){
            unset($_SESSION['user_name']);
            unset($_SESSION['user_url']);

            header("Location:". ROOT ."login");
            die;
        }
    }
    
?>