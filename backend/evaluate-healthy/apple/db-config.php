<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "chat-reviews-db";

$conn = new mysqli($servername, $username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}



?>