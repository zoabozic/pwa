<?php
if (isset($_POST["br1"]) && isset($_POST["br2"])) {
    $a = $_POST["br1"];
    $b = $_POST["br2"];
    $op = $_POST["operacija"];


switch ($op) {
    case "+":
        $rez = $a + $b;
        break;

    case "-":
        $rez = $a - $b;
        break;

    case "*":
        $rez = $a * $b;
        break;

    case "/":
        if ($b != 0) {
            $rez = $a / $b;
        } else {
            $rez = "dijeljenje s nulom nije dozvoljeno :(";
        }
        break;

    default:
        $rez = "nepoznata operacija";
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 3</title>
</head>

<body>

    <p>Kalkulator (switch naredba)</p>

    <form method="post">
        <label>Upiši prvi broj*</label>
        <input type="number" name="br1" required>
        <br><br>

        <label>Upiši drugi broj*</label>
        <input type="number" name="br2" required>
        <br><br>

        <p>Rezultat: <?php if (isset($rez))
            echo $rez; ?> </p>
        <br><br>

        <input type="submit" name="operacija" value="+">
        <input type="submit" name="operacija" value="-">
        <input type="submit" name="operacija" value="*">
        <input type="submit" name="operacija" value="/">
    </form>

</body>

</html>