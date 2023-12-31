<?php

function siteUrl(string $url = ''):string{
    return BASE_URL . $url ;
}


function redirect(string $target = BASE_URL):void{
    header("Location:" .  $target) ;
    die();
}

function setMessageAndRedirect(string $message , string $target):void{
    $_SESSION['error'] = $message ;
    redirect( siteUrl($target) ) ;
}

function setMessage(string $message):void{
    $_SESSION['messgae'] = $message ;
}

function pre($message){
    echo "<pre>" ;
    print_r($message) ;
    echo "</pre>" ;
}