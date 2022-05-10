<?php
$servername = "localhost";
$username = "root";
$password = "v&E%/&YUJKpL:èO)UjnuYF%&G&rkmH7uç;òP:";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$GLOBALS["db"] = $conn;