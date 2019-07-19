<?php
    $host = "localhost"; /* Host name */
    $user = "cedapseagullmedi_demouser"; /* User */
    $password = "l)@D]83^C{#2"; /* Password cedappwd4For! */
    $dbname = "cedapseagullmedi_demodb"; /* Database name */

    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $mysqli = new mysqli($host, $user, $password, $dbname);
    if ($mysqli->connect_error) {
        die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
    }


?>