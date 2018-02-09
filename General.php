<?php

function connectionDB() {

    $hostname = 'localhost';
    $databasenaam = 'reviewdehersteltrainer';
    $username = 'root';
    $password = '';

    $conn = new mysqli($hostname, $username, $password, $databasenaam);
    return $conn;
}

function get_post($conn, $var) {
    return $conn->real_escape_string($_POST[$var]);
}
?> 
