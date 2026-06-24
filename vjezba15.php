<?php
$conn = mysqli_connect("localhost", "root", "", "nova_baza");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 5</title>
</head>

<body>
    <h1>pretraživanje</h1>

    <form action="" method="POST">
        <input type="text" name="input"></input>
        <input type="submit" value="traži">
    </form>

    <?php
    if (isset($_POST["input"])) {
        $query = "SELECT ime, prezime FROM users";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            if ($row["ime"] == $_POST["input"]) {
                echo "<br>" . $row["ime"] ." " . $row["prezime"];
            }
            if ($row["prezime"] == $_POST["input"]) {
                echo "<br>" . $row["ime"] ." " . $row["prezime"];
            }
    }}
    mysqli_close($conn);
    ?>

</body>

</html>