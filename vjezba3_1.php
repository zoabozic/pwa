<?php

$bg = "#232323";
$poruka ="pogodi!";

$broj=rand(1,9);

if (isset($_POST["broj"])) {
if ($_POST["broj"] == $broj) {
    $bg = "#069b0d";
    $poruka = "Pogodak, probaj ponovo!";
}else{
    $bg = "#a81d1d";
    $poruka = "Krivo, probaj ponovo!";
}
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 3</title>
    <style>
        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            color: #ffffff;
            background:
                <?php echo $bg; ?>
            ;
        }
    </style>
</head>

<body>
    <p>igra (pogodi broj)</p>
    <form method="post">
        <label>Upiši jedan broj od 1 do 9: </label>
        <input type="number" name="broj" min="1" max="9" required>
        <br>
        <input class="btn" type="submit" value="<?php echo $poruka; ?>">
    </form>

</body>

</html>

<?php
if (isset($_POST["broj"])) {
echo "Zamišljeni broj je $broj";
}
?>