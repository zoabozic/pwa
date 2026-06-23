<?php
if (isset($_POST["v1"]) && isset($_POST["v2"])) {
    $v1 = $_POST["v1"];
    $v2 = $_POST["v2"];
    $rj = ($v1 * 3 - $v2) / 2;
}
if (isset($rj)) {
    echo "<br><p> (3 * $v1 - $v2) / 2 = $rj</p>";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 2</title>
</head>

<body>
    <form method="POST" action="vjezba2_4.php">
        <label>Vrijednost a:</label>
        <input type="number" name="v1" id="v1"/>
        <br>
        <label>Vrijednost b:</label>
        <input type="number" name="v2" id="v2"/>
        <br>
        <button type="submit">Pošalji</button>
    </form>
</body>

</html>