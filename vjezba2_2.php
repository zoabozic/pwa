<?php
$naslov    = "PHP dokument";
$autor     = "Zoa Božić";
$link_href = "https://hr.wikipedia.org/wiki/PHP";
$link_text = "Saznaj više o PHP-u";
$opis = "Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
$linkInfo    = "https://www.php.net";
$linkNatrag  = "vjezba2_1.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 2</title>
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

        .btn:hover{
            background: var(--accent);
            color: #ffff;
        }

        .btn:focus-visible{
            outline: 3px solid var(--accent);
        }
        
        .btn:active{
            opacity:80%;
        }

    </style>
</head>

<body>

     <main class="wrap">
    <h1><?php echo htmlspecialchars($naslov); ?></h1>
    <p>Ovu stranicu izradila je <strong><?php echo htmlspecialchars($autor); ?></strong>.</p>
    <p><?php echo $opis; ?></p>
    <div class="row">
      <a class="btn" href="<?php echo $linkInfo; ?>" target="_blank">Saznaj više o PHP-u</a>
      <a class="btn" href="<?php echo $linkNatrag; ?>">Natrag na vježbu 2.1</a>
    </div>
    <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
  </main>

</body>

</html>