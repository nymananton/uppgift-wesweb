<?php
    //session_start();
    //include("db_connect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="borassk.css">
        <title>Borås Skidlöparklubb</title>
    </head>
    <body class="body">
        <nav>
            <a href="index.html"><img src="https://boråssk.se/wp-content/uploads/2019/12/borassk_logo_mobile.png" alt="Borås SK" id="nav"></a>
            <ul class="indexul">
                <li class="indexli"><a href="https://www.skidspar.se/vastra-gotaland/boras/boras-skidstadion"><strong>SPÅRSTATUS</strong></a></li>
                <li class="indexli"><a href="tavlingar.php"><strong>TÄVLINGAR</strong></a></li>
                <li class="indexli"><a href=""><strong>FORUM</strong></a></li>
            </ul>
        </nav>

        <h1>Anmälan till XCgames</h1>
        <h3>Sveriges häftigaste skidtävling<br></h3>
        
        <form action="submit" method="post">
            <label for="förnamn">Förnamn</label><br>
            <input type="text" name="förnamn" id="" required><br>
            <label for="efternamn">Efternamn</label><br>
            <input type="text" name="efternamn" id="" required><br>
            <label for="kön">Kön</label><br>
            <input type="radio" name="kön" id="kille" value="kille">
            <label for="kille">Kille</label><br>
            <input type="radio" name="kön" id="tjej" value="tjej">
            <label for="tjej">Tjej</label><br>
            <label for="födelseår">Födelseår</label><br>
            <select name="födelseår">
                <option>Välj år</option>
                <?php $years = range(date("Y"), 1900);?>
                <?php foreach ($years as $year) : ?>
                <option value="<?=$year;?>"><?=$year; ?></option>
                <?php endforeach; ?>
            </select><br>
            <label for="klass">Klass</label><br>
            <select name="klass" id="">
                <option value="åldersbaserad">Åldersbaserad</option>
                <option value="öppen">Öppen</option>
            </select><br>
            <input type="submit" value="Skicka in anmälan">
        </form>

        <footer class="footer">
            <p>Ansvarig: Anton Nyman | <strong>BORÅS SK - SKIDOR</strong> | E-post: borasskidloparklubb@gmail.com</p>
        </footer>
    </body>
</html>
