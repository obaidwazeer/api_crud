<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'api_crud';

    $conn = mysqli_connect($server, $username, $password, $database) or die(mysqli_error($conn));
?>