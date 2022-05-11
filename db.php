<?php
$servername = "localhost";
$username = "admin";
$password = 'fD6(:çU)ç_è9jbnBE$YNLç=yuuNTyuln';
$db = "projecthub";

$conn = new mysqli($servername, $username, $password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SELECT * FROM progetti");
