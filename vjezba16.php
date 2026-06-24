<?php

#github link na export baze: https://github.com/zoabozic/pwa/blob/main/vjezba16_baza.sql

$conn = mysqli_connect("localhost", "root", "", "nova_baza");

if (isset($_POST["submit"])) {
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $mail = $_POST["mail"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $drzava = $_POST["drzava"];

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (ime, prezime, korisnickoime, lozinka, drzava, email)
    VALUES ('$ime', '$prezime', '$username', '$hashed_pass', '$drzava', '$mail')";

    if (mysqli_query($conn, $query)) {
        echo "Uspješno spremljeno!";
    }
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 16</title>
</head>

<body>
    <form action="" method="POST">
        <label>first name:*</label>
        <input type="text" name="ime" required></input>
        <br>
        <label>last name:*</label>
        <input type="text" name="prezime" required></input>
        <br>
        <label>your e-mail:*</label>
        <input type="email" name="mail" required></input>
        <br>
        <label>username:*</label>
        <input type="text" name="username" required></input>
        <br>
        <label>password:*</label>
        <input type="text" name="password" required></input>
        <br>
        <select name="drzava">
            <option value="hrv">Hrvatska</option>
            <option value="eng">Engleska</option>
            <option value="fra">Francuska</option>
            <option value="njm">Njemačka</option>
        </select>

        <input type="submit" value="submit" name="submit">
    </form>

</body>

</html>