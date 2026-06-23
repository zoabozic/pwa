<?php
if (isset($_POST["kol1"]) && isset($_POST["kol2"])) {
    $kol1 = $_POST["kol1"];
    $kol2 = $_POST["kol2"];

    $prosjek = ($kol1 + $kol2) / 2;
    if ($kol1 == 1 || $kol2 == 1) {
        $konacna = 1;
    } else {
        $konacna = round($prosjek);
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
        :root {
            --bg: #262947;
            --card: #ffff;
            --text: #000000;
            --muted: #3f3f3f;
            --accent: #6f0a9e;
        }

        * {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            line-height: 1.6;
        }

        h1 {
            font-size: 2rem;
            margin-top: 0px;
            margin-bottom: 14px;
        }

        p {
            margin-bottom: 14px;
            line-height: 1.6;
        }

        .wrap {
            width: 100%;
            max-width: 720px;
            margin: 48px auto;
            background: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            box-sizing: border-box;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <main class="wrap">
        <form method="post">

            <label>ocjena iz prvog kolokvija: </label>
            <input type="number" name="kol1" min="1" max="5" required>
            <br>

            <label>ocjena iz drugog kolokvija: </label>
            <input type="number" name="kol2" min="1" max="5" required>
            <br><br>

            <input type="submit" value="Pošalji">

        </form>
        <p>Prosjek: <?php if (isset($prosjek))
            echo number_format($prosjek, 2); ?></p>
        <p>Konačna ocjena: <?php if (isset($konacna))
            echo $konacna; ?></p>
    </main>
</body>

</html>