<?php

$root_host = "localhost";
$root_user = "root";
$root_pass = "";  // web hostingde şifre verilir. onu not et
$root_name = "wtb";

$root = mysqli_connect($root_host, $root_user, $root_pass, $root_name);
    if(mysqli_connect_errno()){
        echo( mysqli_error($root)."adlı database'e bağlanılamadı.");
        exit();
    } else {
        
    }
       
        
?>