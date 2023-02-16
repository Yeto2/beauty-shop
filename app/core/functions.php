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
    
    echo('<div class="toastErr align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">');
    echo('<div class="d-flex">');
    echo( '<div class="toast-body">');
    echo $_SESSION['error'] ;
    unset($_SESSION['error']);
    echo('</div>');
    echo('<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>');
    echo('</div>');
    echo('</div>');
}

}

?>