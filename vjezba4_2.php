<?php

$date = new DateTimeImmutable();
$dan = $date->format('D');
$sat = $date->format('G');

if ($dan == "Sun") {
    $stanje = "zatvoren.";
} else if ($dan == "Sat") {
    if ($sat >= 9 && $sat <= 14) {
        $stanje = "otvoren.";
    } else
        $stanje = "zatvoren.";
} else {
    if ($sat >= 8 && $sat <= 20) {
        $stanje = "otvoren.";
    } else
        $stanje = "zatvoren.";
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
    <h1>Dućan</h1>
    <p>radno vrijeme: </p>
    <p>PON - PET : 8 - 20</p>
    <p>SUB : 9 - 14</p>
    <p> Dućan je trenutno <?php echo $stanje; ?> </p>
</body>

</html>