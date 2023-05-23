<?php

require_once("root.php");

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($root, "SELECT * FROM kayit_bilgi WHERE `username`='$username' AND `password`='$password'");
    $veri = mysqli_num_rows($query);

    if ($veri == 1) {

        header("Location: düzenle.php");
        exit();
    } else {
        echo "Kullanıcı adı veya şifre yanlış";
        exit();
    }
} else {

?>


    <html>

    <head>

        <title> Kayıt Düzenle </title>


    </head>

    <body>

        <link rel="stylesheet" type="text/css" href="style.css">
        <center>
            <form action="kayıt_düzenleme.php" method="post">
                <h1> Kayıt düzenleme</h1>
                <p>Kaydı Düzenlenecek hesabın bilgilerini giriniz:</p>
                Kullanıcı Adı:<input type="text" name="username"> <br /><br /><br />
                Şifre:<input type="password" name="password"> <br /><br /><br />


                <button type="submit" name="submit"> Kaydı düzenle </button> <br />
                <button><a href="admin.html"> Admin Sayfası </a> <br /> </button>
                <button><a href="index.html">Site Ana Sayfa </a> <br /> </button>

            </form>


        </center>
    <?php
}
    ?>
    </body>

    </html>