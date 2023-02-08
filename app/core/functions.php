<?php

function show($stuff){
    echo "<pre>";
        print_r($stuff);
    echo "</pre>";
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function check_message()
{
    if (isset($_SESSION['error']) && $_SESSION['error'] != "") {
        echo $_SESSION['error'] ;
        unset($_SESSION['error']);
    }
}

?>