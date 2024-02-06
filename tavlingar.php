<?php
    session_start();
    include("db-connect.php");
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

        <ul class="startlista">
            <li class="tävlingli"><h3>XCgames</h3></li>
            <li class="tävlingli" id="anmälan"><a href="anmalan.php">Anmälan</a></li>
        </ul> 

        <footer class="footer">
            <p>Ansvarig: Anton Nyman | <strong>BORÅS SK - SKIDOR</strong> | E-post: borasskidloparklubb@gmail.com</p>
        </footer>
    </body>
</html>