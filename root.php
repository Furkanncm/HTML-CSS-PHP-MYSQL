<?php

$root_host = "sql101.epizy.com";
$root_user = "epiz_34271043";
$root_pass = "BKdo0maffs";  // web hostingde şifre verilir. onu not et
$root_name = "epiz_34271043_kayit_bilgi";

$root = mysqli_connect($root_host, $root_user, $root_pass, $root_name);
    if(mysqli_connect_errno()){
        echo( mysqli_error($root)."adlı database'e bağlanılamadı.");
        exit();
    } else {
        
    }
       
        
?>
