<?php

require_once "root.php";
if (isset($_POST["username"])) {

    $form_username = $_POST["username"];
    $form_password = $_POST["password"];
    $form_admin_username = "admin";
    $form_admin_password = "admin";

    $query = mysqli_query($root, "SELECT * FROM kayit_bilgi WHERE `username`='$form_username' AND `password`='$form_password'");
    $veri = mysqli_num_rows($query);

    if ($form_admin_username == $form_username && $form_admin_password == $form_password) {
        header("Location: admin.html");
        exit();
    }

    if ($veri == 1) {

        // session_start();
        // $_SESSION["username"] = $form_username;
        // $_SESSION["password"] = $form_password;
        header("Location: index.html");
        exit();
    } else {
        echo "Kullanıcı adı veya şifre yanlış";
        exit();
    }
} else {




?>

    <html>

    <head>
        <meta charset="utf-8">
        <title> Giriş Yap </title>
    </head>

    <body>

        <link rel="stylesheet" type="text/css" href="style.css">


        <center>
            <form action="login.php" method="POST">
                <h1> Giris Yap </h1>
                <input type="text" id="username" name="username" placeholder="Kullanıcı Adı" required> <br /> <br />
                <input type="password" id="password" name="password" placeholder="Şifre" required> <br />
                <button type="submit" name="submit"> Giris yap </button> <br />
                <button><a href="signup.php"> Register </a><br /></button>
                <button><a href="index.html"> Ana Sayfa </a> <br /> </button>
            </form>
        </center>


    </body>

    </html>

<?php
}



?>