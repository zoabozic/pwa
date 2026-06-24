<?php

if(isset($_POST["rec"])){
    $br=str_word_count($_POST["rec"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 4</title>
</head>
<body>
    <h2>zadatak str_word_count</h2>
    <form action="" method="POST">
        <label>Ulazni niz:</label>
        <br>
        <input type="text" name="rec">
        <br>
        <input type="submit" value="ispiši broj riječi"/>
    </form>
    <p><?php if(isset($_POST["rec"])){echo "ulazni niz " . $_POST["rec"] . " sadrži " .  $br ." riječi."; }?></p>
</body>
</html>