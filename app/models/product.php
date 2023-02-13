<?php

Class Product{

    function upload($POST,$FILES)
    {
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
                }





    }


}}