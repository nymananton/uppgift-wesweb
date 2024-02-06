<?php
    $username = "username";
    $password = "password";
    $dbname = "startlista";

    $conn = new mysqli("localhost", $username, $password, $dbname) or die("Anslutningen misslyckades");

    echo "Connected successfully";
?>