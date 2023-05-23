<?php

require_once "root.php";

if (isset($_POST['submit'])) {

    $form_username = $_POST["username"];
    $form_password = $_POST["password"];

    $query = mysqli_query($root, "SELECT * FROM kayit_bilgi WHERE `username`='$form_username' AND `password`='$form_password'");
    $veri = mysqli_num_rows($query);

    if ($veri == 1) {

        $query = "DELETE FROM kayit_bilgi WHERE username='$form_username' AND password='$form_password'";

        if (mysqli_query($root, $query)) {

            echo "Kayıt Silindi";
            echo "<br>";
            echo "<a href='admin.html'>Admin Sayfası</a>";

            exit();
        } else {

            echo "Kayıt Silinemedi";
            echo "<br>";
            echo "Tekrar Denemek için <a href='kayıt_sil.php'>tıklayınız...</a>";
            exit();
        }
    } else {
        echo "Kullanıcı adı veya şifre yanlış";
        echo "<br>";
        echo "Tekrar Denemek için <a href='kayıt_sil.php'>tıklayınız...</a>";
        exit();
    }
} else {



?>

    <html>

    <head>
        <meta charset="utf-8">
        <title> Kayıt Sil </title>


    </head>

    <body>

        <link rel="stylesheet" type="text/css" href="style.css">
        <center>
            <form action="kayıt_sil.php" method="post">
                <h1> Kayıt Sil </h1>
                <p>Kaydı Silinecek hesabın bilgilerini giriniz:</p>
                Kullanıcı Adı:<input type="text" name="username"> <br /><br /><br />
                Şifre:<input type="password" name="password"> <br /><br /><br />
                <button type="submit" name="submit"> Kaydı sil </button> <br />
                <button><a href="admin.html"> Admin Sayfası </a> <br /> </button>
                <button><a href="index.html">Site Ana Sayfa </a> <br /> </button>

            </form>


        </center>

    </body>

    </html>

<?php
}
