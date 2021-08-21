<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "db_learn_pl2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>