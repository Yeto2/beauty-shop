<?php

Class Product{

    function upload($POST,$FILES){
        $DB = new Database();
            $_SESSION['error'] = "";
            $allowed[] = "image/jpeg";
            $allowed[] = "image/png";

            if(isset($POST['title']) && isset($FILES['image'])){

                // upload product image
                if ($FILES['image']['name'] != "" && $FILES['image']['error'] == 0 && in_array($FILES['image']['type'] , $allowed)) {
                    
                    $folder = "uploads/";
                    if (!file_exists($folder)) {
                        mkdir($folder,0777,true);
                    }
                    $destination = $folder . $FILES['image']['name'];
                    move_uploaded_file($FILES['image']['tmp_name'],$destination);

                }else {
                    $_SESSION['error'] = "This File could not be Uploaded !";
                }

                if ($_SESSION['error'] == "") {
                    
                    // save to database
                    $arr['title'] = $POST['title'];
                    $arr['description'] = $POST['description'];
                    $arr['image'] = $destination;
                    $arr['categories'] = $POST['categories'];
                    $arr['url_address'] = generateRandomString(60);
                    $arr['date'] = date("Y-m-d H:i:s");
                    $arr['price'] = $POST['price'];


                    $query = "insert into products (title,description,image,categories,url_address,date,price)values (:title, :description, :image, :categories, :url_address, :date, :price)";
                    $data = $DB->write($query,$arr);
                    if($data){
                        header("Location:". ROOT ."arrival");
                        die;
                    }
                }else {
                    $_SESSION['error'] = "Somthing Went wrong !!";
                }}
    }


    function uploadMultiple($POST,$FILES){

        $DB = new Database();
        $_SESSION['error'] = "";
        $allowed[] = "image/jpeg";
        $allowed[] = "image/png";
        $imgcount = count($_FILES['image']['type']);

        for ($i=0; $i < $imgcount ; $i++) { 
            if ($_FILES['image']['name'][$i] != "" && $_FILES['image']['error'][$i] == 0 &&in_array($_FILES['image']['type'][$i] , $allowed)) {
                $folder = "uploads/";

                if (!file_exists($folder)) {
                    mkdir($folder,0777,true);
                }
                $destination = $folder . $_FILES['image']['name'][$i];
                $destinationarr[] = $destination;
                
                move_uploaded_file($_FILES['image']['tmp_name'][$i],$destination);

            }else {
                $_SESSION['error'] = "This File could not be Uploaded !";
            }
        
        }
        if ($_SESSION['error'] == "") {

            $count = count($POST['title']);
            
            for ($i=0; $i < $count; $i++) { 
                $arr['title'] = $POST['title'][$i];
                $arr['description'] = $POST['description'][$i];
                $arr['categories'] = $POST['categories'][$i];
                $arr['price'] = $POST['price'][$i];
                $arr['image'] = $destinationarr[$i];
                $arr['url_address'] = generateRandomString(60);
                $arr['date'] = date("Y-m-d H:i:s");
                    $results[] = $arr;
            }
            $query = "insert into products (title,description,image,categories,url_address,date,price)values (:title, :description, :image, :categories, :url_address, :date, :price)";
            
            foreach ($results as $result) {
                $data = $DB->write($query,$result);
            }
            // --------
            show($result) ;
            // --------
            if($data){
                header("Location:". ROOT ."arrival");
                die;
            }
        }else {
            $_SESSION['error'] = "Somthing Went wrong !!";
        }


    }

    function delete($id){
        $DB = new Database();
        $query = "delete from products where id = $id";
        $data = $DB->read($query);
    }

    function updateProduct($data) {
            $DB = new Database();
            $_SESSION['error'] = "";
            $allowed[] = "image/jpeg";
            $allowed[] = "image/png";

            if(isset($POST['title']) && isset($FILES['image'])){

            // upload product image
                if ($FILES['image']['name'] != "" && $FILES['image']['error'] == 0 && in_array($FILES['image']['type'] , $allowed)) {
                    
                    $folder = "uploads/";
                    if (!file_exists($folder)) {
                        mkdir($folder,0777,true);
                    }
                    $destination = $folder . $FILES['image']['name'];
                    move_uploaded_file($FILES['image']['tmp_name'],$destination);

                }else {
                    $_SESSION['error'] = "This File could not be Uploaded !";
                }

                if ($_SESSION['error'] == "") {
                    
            // save to database
                    $arr['title'] = $POST['title'];
                    $arr['description'] = $POST['description'];
                    $arr['image'] = $destination;
                    $arr['categories'] = $POST['categories'];
                    $arr['url_address'] = generateRandomString(60);
                    $arr['date'] = date("Y-m-d H:i:s");
                    $arr['price'] = $POST['price'];

                    $query = "update products set name = :name, description = :description, price = :price WHERE id = :id";
                    $data = $DB->write($query,$arr);
                    if($data){
                        header("Location:". ROOT ."arrival");
                        die;
                    }
                }else {
                    $_SESSION['error'] = "Somthing Went wrong !!";
                }
                }

        
        
    }
}