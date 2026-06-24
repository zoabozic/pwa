<?php
if(isset($_POST["ime"]))
{
    setcookie("korisnik", $_POST["ime"], time()+86400, "/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba 12</title>
    <style>
        body,
        html {
            font-family: 'Oswald', sans-serif;
            margin: 0;
            font-size: 16px;
        }

        header {
            display: block;
            width: 100%;
        }

        .hero-image {
            background-image: url("img/php.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            height: 500px;
        }


        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        h1,
        h2 {
            margin: 0.5em 0;
            font-size: 2em;
        }

        h2 {
            font-size: 1.5em;
            color: #27318b;
        }

        main {
            margin: 2em;
        }

        main a {
            color: #27318b;
            text-decoration: none;
        }

        main a:hover {
            color: #8b3727;
            text-decoration: underline;
        }

        .cookie {
            width: 78%;
            float: left;
            margin-right: 2%;
        }

        p {
            margin: 1em 0;
            line-height: 1.4em;
            letter-spacing: 1px;
        }

        img {
            width: 100%;
        }


        #contact {
            margin: 1em 0
        }

        label {
            display: block;
        }

        input[type=text],
        input[type=email],
        input[type=password],
        select,
        textarea {
            width: 50%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            font-family: 'Oswald', sans-serif;
            font-size: 95%;
        }

        input[type=submit] {
            display: block;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 25%;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            padding: 0.1em;
            clear: both;
        }

        footer p {
            color: white;
            text-align: center;
            margin: 0.5em;
        }

    </style>
</head>

<body>
    <header>
		<div class="hero-image"></div>
        <nav>
            <ul><li><a href="https://www.php.net">php</a></li></ul>
        </nav>
	</header>

	<main>

        <?php
        if (isset($_COOKIE["korisnik"])) {
            echo "bok, " . $_COOKIE["korisnik"];
        }else{
            echo "<form action='' method='POST'>
            <label>ime:</label>
            <input type='text' name='ime'>
            <br>
            <input type='submit' value='pošalji'>
            </form>";
        }
        ?>

    </main>
	
	<footer>
		<p>Copyright &copy;</p>
	</footer>

</body>

</html>