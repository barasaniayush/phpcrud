<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'dbcrud';
    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn) {
        die("Please connect with database to continue");
    }
?>