<?php
    
    $files = glob("*");

    define('BASE_URL', "https://uktaxinetwork.com/");
    define ('CURR_URL', "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    $file =  basename($_SERVER['PHP_SELF']);

    $fileNoPHP = substr($file, 0, -4);

    $companyName = 'Uk Taxi Network';
  
    $phoneNo = "xxx xxxx xxxx";
    $address = "Luton Airport";
    $area = "Luton";

    $f = str_replace('-', ' ', $file);
    $title = substr(ucwords($f), 0, -4);

    // $titleTag = "$area Taxis & Minibuses | Reliable Service | Book Online Now";
    // $des = "Book $area Minicabs, Taxis, and Minibuses with us today! We offer reliable and affordable services in $area and the nearby areas. For booking call us now";
