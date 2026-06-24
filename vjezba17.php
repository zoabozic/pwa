<?php
$conn = mysqli_connect("localhost", "root", "", "nova_baza");
$query = "SELECT users.ime, users.prezime, drzave.drzava AS drzava_drzava
          FROM users
          JOIN drzave ON users.drzava_id = drzave.id";
$result = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 17</title>
</head>

<body>
    <?php while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . $row["ime"] . " " . $row["prezime"] . " " . $row["drzava_drzava"];
    }
    ?>
</body>

</html>