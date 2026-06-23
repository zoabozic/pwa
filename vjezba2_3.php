<?php
$naslov = "PHP dokument";
$autor = "Zoa Božić";
$link_href = "https://hr.wikipedia.org/wiki/PHP";
$link_text = "Saznaj više o PHP-u";
$opis = "Ova stranica nadograđuje vježbu 1c: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis.";
$linkInfo = "https://www.php.net";
$linkNatrag = "vjezba2_2.php";

$dozvoljeneTeme = array("dark", "light");
$dozvoljeneSlike = array(
    "php" => "img/php.jpg",
    "server" => "img/server.jpg",
    "code" => "img/code.jpg"
);

$temaKey = isset($_GET["tema"]) && in_array($_GET["tema"], $dozvoljeneTeme) ? $_GET["tema"] : "dark";
$slikaKey = isset($_GET["slika"]) && isset($dozvoljeneSlike[$_GET["slika"]]) ? $_GET["slika"] : "php";
$prikaziOpis = isset($_GET["opis"]);

$slikaPath = $dozvoljeneSlike[$slikaKey];

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

if ($temaKey === "light") {
    $bg = " #5b5e85";
    $card = " #ffff";
    $text = "#000000";
    $muted = " #3f3f3f";
    $accent = " #6f0a9e";
} else {
    $bg = "#1c0f2a";
    $card = "#ababab";
    $text = "#111827";
    $muted = "#6b7280";
    $accent = "#520076";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 2</title>
    <style>
        :root {
            --bg:
                <?php echo $bg; ?>;
            --card:
                <?php echo $card; ?>;
            --text:
                <?php echo $text; ?>;
            --muted:
                <?php echo $muted; ?>;
            --accent:
                <?php echo $accent; ?>;
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

        footer {
            font-size: 0.9 rem;
            color: var(--muted);
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
        }

        .btn:hover {
            background: var(--accent);
            color: #ffff;
        }

        .btn:focus-visible {
            outline: 3px solid var(--accent);
        }

        .btn:active {
            opacity: 80%;
        }
    </style>
</head>

<body>

    <main class="wrap">
    <h1><?php echo h($naslov); ?></h1>
    <p>Ovu stranicu izradila je <strong><?php echo h($autor); ?></strong>.</p>

    <div class="figure">
      <img src="<?php echo h($slikaPath); ?>" alt="<?php echo h($slikaKey); ?>">
    </div>

    <?php if ($prikaziOpis): ?>
      <p><?php echo h($opis); ?></p>
    <?php endif; ?>

    <form method="get" action="vjezba2_3.php">
      <fieldset>
        <legend>Odaberi temu</legend>
        <label><input type="radio" name="tema" value="dark"  <?php echo $temaKey==="dark" ? "checked" : ""; ?>> Dark</label>
        <label><input type="radio" name="tema" value="light" <?php echo $temaKey==="light" ? "checked" : ""; ?>> Light</label>
      </fieldset>

      <fieldset>
        <legend>Odaberi sliku</legend>
        <label for="slika">Slika:</label>
        <select id="slika" name="slika">
          <option value="php"    <?php echo $slikaKey==="php"    ? "selected" : ""; ?>>PHP</option>
          <option value="server" <?php echo $slikaKey==="server" ? "selected" : ""; ?>>Server</option>
          <option value="code"   <?php echo $slikaKey==="code"   ? "selected" : ""; ?>>Code</option>
        </select>
      </fieldset>

      <label><input type="checkbox" name="opis" <?php echo $prikaziOpis ? "checked" : ""; ?>> Prikaži opis</label>

      <div class="row" style="margin-top:10px">
        <button class="btn" type="submit">Primijeni odabir</button>
        <a class="btn" href="<?php echo h($linkNatrag); ?>">Natrag na vježba 1c</a>
      </div>
    </form>

    <p class="muted">© <?php echo date("Y"); ?> — Demo za PHP</p>
  </main>

</body>

</html>