<?php
$servername = "localhost";
$username = "DLakmal";
$password = "0412227518";
$dbname = "chat_reviews";

$conn = new mysqli($servername, $username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

?>