<?php
require_once "root.php";




if (isset($_POST["submit"])) {
    $form_username = $_POST["username"];
    $form_password = $_POST["password"];



    $query = mysqli_query($root, "SELECT * FROM kayit_bilgi WHERE `username`='$form_username' AND `password`='$form_password'");
    $veri = mysqli_num_rows($query);

    if ($veri == 1) {

        echo "<table  border='1'  text-align:center;'>";

        echo "<tr>";
        echo "<td> Kullanıcı Adı </td>";
        echo "<td> Şifre </td>";
        echo "<td> E-mail </td>";
        echo "<td> Telefon Numarası </td>";
        echo "<td> Randevu Saati </td>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telefon_numarası'] . "</td>";
            echo "<td>" . $row['randevu_saati'] . "</td>";
            echo "</tr>";
        }



        exit();
    } else {
        echo "Kullanıcı adı veya şifre yanlış";
        exit();
    }
} else if (isset($_POST["submit_all"])) {


    $sql = "SELECT *FROM kayit_bilgi";
    $gelenveri = mysqli_query($root, $sql);

    if (mysqli_num_rows($gelenveri) > 0) {

        echo "<table  border='1'  text-align:center;'>";
        echo "<tr>";
        echo "<td> Kullanıcı Adı </td>";
        echo "<td> Şifre </td>";
        echo "<td> E-mail </td>";
        echo "<td> Telefon Numarası </td>";
        echo "<td> Randevu Saati </td>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($gelenveri)) {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telefon_numarası'] . "</td>";
            echo "<td>" . $row['randevu_saati'] . "</td>";
            echo "</tr>";
        }
    }
}
?>

<html>

<head>
    <meta charset="utf-8">
    <title>Kayıt Sorgulama </title>
</head>

<body>

    <link rel="stylesheet" type="text/css" href="style.css">
    <center>
        <form action="listeleme.php" method="POST">
            <h1> Kayıt Sorgulama </h1>
            <input type="text" id="username" name="username" placeholder="Kullanıcı Adı"> <br /> <br />
            <input type="password" id="password" name="password" placeholder="Şifre"> <br />
            <button type="submit" name="submit">Bireysel Sorgula </button> <br />
            <button type="submit" name="submit_all"> Tüm Kayıtları Listele </button> <br />
            <button><a href="admin.html"> Admin Sayfası </a> <br /> </button>
            <button><a href="index.html">Site Ana Sayfa </a> <br /> </button>
        </form>
    </center>
</body>

</html>