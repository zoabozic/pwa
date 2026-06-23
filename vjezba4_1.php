<?php
$cars = array("Audi", "BMW", "Renault", "Citroen");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 4</title>
</head>

<body>
    <?php
    echo "<p>Označi vozilo: </p><ul>";
    echo "<form action='' method='post'>";
    foreach ($cars as $car) {
        echo "<input type='radio' name='auto' value='$car'>$car</input><br>";
    }
    echo '<br><button type="submit" value="submit">POŠALJI</button><br>';
    echo "</form><br>";

    if (isset($_POST["auto"])) {
        echo ($_POST["auto"]);
    }
    ?>
</body>

</html>