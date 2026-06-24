<?php
$conn = mysqli_connect("localhost", "root", "", "nova_baza");

if (isset($_POST["update"])) {
    $id = (int) $_POST["id"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $drzava_id = (int) $_POST["drzava_id"];

        $stmt = mysqli_prepare($conn, "UPDATE users SET ime = ?, prezime = ?, drzava_id = ? WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "ssii", $ime, $prezime, $drzava_id, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

$drzave_result = mysqli_query($conn, "SELECT id, drzava FROM drzave");
$drzave = [];
while ($row = mysqli_fetch_assoc($drzave_result)) {
    $drzave[] = $row;
}

$query = "SELECT users.id, users.ime, users.prezime, users.drzava_id
          FROM users
          JOIN drzave ON users.drzava_id = drzave.id";
$result = mysqli_query($conn, $query);
$users = [];
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 18</title>
</head>

<body>
    
<?php foreach ($users as $user): ?>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $user["id"] ?>">

        <input type="text" name="ime" value="<?= htmlspecialchars($user["ime"]) ?>">
        <input type="text" name="prezime" value="<?= htmlspecialchars($user["prezime"]) ?>">

        <select name="drzava_id">
            <?php foreach ($drzave as $d): ?>
                <option value="<?= $d["id"] ?>" <?= $d["id"] == $user["drzava_id"] ? "selected" : "" ?>>
                    <?= htmlspecialchars($d["drzava"]) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" name="update">Spremi</button>
    </form>
<?php endforeach; ?>

</body>

</html>