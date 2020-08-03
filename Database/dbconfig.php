<?php
/**
 * Created by PhpStorm.
 * User: shiva
 * Date: 11/4/2018
 * Time: 1:56 PM
 */


$servername = "localhost";
$port = 3306;
$username = "root";
$password = "";

// Create connection
$connection = $servername.":".$port;
$conn = mysqli_connect($connection, $username, $password);

// Check connection


$sql = "USE airline";
mysqli_query($conn, $sql);

?>



