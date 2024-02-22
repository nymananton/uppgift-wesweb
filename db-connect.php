<?php
    $dbhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "startlista";

    $conn = mysqli_connect($dbhost, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        exit("Anlutningen misslyckades". mysqli_connect_error());
    }
?>
