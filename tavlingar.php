<?php
    session_start();
    include("db_connect.php");
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

        <ul class="tavlingarnav">
            <li class="tävlingli"><h3>XCgames</h3></li>
            <li class="tävlingli" id="anmälan"><a href="anmalan.php">Anmälan</a></li>
        </ul> 

        <?php
        //$sql = "INSERT INTO startlista (förnamn, efternamn, kön, födelseår, klass) VALUES (\"Gustav\", \"Vasa\", \"kille\", \"1496\", \"öppen\");";
        //$sql = "INSERT INTO startlista (förnamn, efternamn, kön, födelseår, klass) VALUES (\"Aina\", \"Nordén\", \"tjej\", \"1922\", \"öppen\");";
        //$sql = "INSERT INTO startlista (förnamn, efternamn, kön, födelseår, klass) VALUES (\"Elias\", \"Lyckelid\", \"kille\", \"2005\", \"åldersbaserad\");";
        $sql = "SELECT * FROM startlista;";
        $result = mysqli_query($conn, $sql);
        ?>

        <table class="startlista">
            <tr>
                <th>Startnummer</th>
                <th>Förnamn</th>
                <th>Efternamn</th>
                <th>Födelseår</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result)) : ?>
            <tr>
                <td><?=$row['startnummer']?></td> 
                <td><?=$row['fornamn']?></td> 
                <td><?=$row['efternamn']?></td> 
                <td><?=$row['fodelsear']?></td> 
            </tr>
            <?php endwhile; ?>
        </table>

        <footer class="footer">
            <p>Ansvarig: Anton Nyman | <strong>BORÅS SK - SKIDOR</strong> | E-post: borasskidloparklubb@gmail.com</p>
        </footer>
    </body>
</html>
