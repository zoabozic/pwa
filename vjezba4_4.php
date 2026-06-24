<?php
function prost($broj)
{
    for ($i = $broj - 1; $i > 1; $i--) {
        if (($broj % $i) == 0) {
            break;
        }
    }
    if($i==1){
        return 1;
        }
        else return 0;
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
    <form action="" method="POST">
        <label>Upiši broj: </label>
        <input type="number" name="br"></input>
        <br>
        <input type="submit" value="pošalji">
    </form>

    <?php
    if (isset($_POST["br"])) {
        $br = $_POST["br"];
        if (prost($br) == 1) {
            echo "Uneseni broj je prost.";
        } else
            echo "Uneseni broj nije prost.";
    }

    echo "<br><br>Prosti brojevi do 100:";
    for ($j=2; $j<100; $j++){
        if (prost($j) == 1){
            echo "<br>$j";
        }
    }

    ?>


</body>

</html>