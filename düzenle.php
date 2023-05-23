<?php

require_once "root.php";

if (isset($_POST['submit'])) {

    $form_username = $_POST["username"];
    $form_password = $_POST["password"];
    $form_password_confirm = $_POST["password_confirm"];
    $form_email = $_POST["email"];
    $form_telefon_numarası = $_POST["telefon_numarası"];
    $form_randevu_saati = $_POST["randevu_saati"];

    if (strlen($form_password) < 8 || strlen($form_password) > 16) {
        echo "Şifre 8 ile 16 karakter arasında olmalıdır.";
        exit();
    }

    if ($form_password != $form_password_confirm) {
        echo "Şifreler uyuşmuyor.";
        exit();
    }

    $query = "UPDATE kayit_bilgi SET `username`='$form_username', `password`='$form_password', email='$form_email', telefon_numarası='$form_telefon_numarası', randevu_saati='$form_randevu_saati' WHERE username='$form_username' AND password='$form_password'";

    if (mysqli_query($root, $query)) {

        echo "Kayıt Güncellendi";
        echo "<br>";
        echo "<a href='admin.html'>Admin Sayfası</a>";

        exit();
    } else {

        echo "Kayıt Güncellenemedi";
        echo "<br>";
        echo "Tekrar Denemek için <a href='güncelle.php'>tıklayınız...</a>";
        exit();
    }
} else {





?>


    <html>

    <head>

        <meta charset="utf-8">

        <title> Kayıt Düzenle </title>


    </head>

    <body>
        <link rel="stylesheet" type="text/css" href="style.css">
        <center>
            <form action="düzenle.php" method="post">
                <h1> Kaydı Düzenle </h1>
                Kullanici Adi :<input type="text" id="username" name="username" placeholder="Kullanıcı adı" required> <br /><br /><br />
                Şifre :<input type="password" id="password" name="password" placeholder="Şifre" required> <br /><br /><br />
                Şifre Tekrar :<input type="password" id="password_confirm" name="password_confirm" placeholder="Şifre Tekrar" required> <br /><br /><br />
                E-mail :<input type="text" id="email" name="email" placeholder="unknown@gmail.com" required> <br /><br /><br />
                Telefon Numarasi :<input type="text" id="telefon_numarası" name="telefon_numarası" placeholder="telefon_numarası" required> <br /><br /><br />
                Randevu Saati :<input type="text" id="randevu_saati" name="randevu_saati" placeholder="randevu_saati" required> <br /><br /><br />

                <button type="submit" name="submit"> Kaydı düzenle </button> <br />
                <button><a href="admin.html"> Admin Sayfası </a> <br /> </button>



            </form>


        </center>
    <?php
}
    ?>
    </body>

    </html>