<?php
$servername = "localhost";
$username = "admin";
$password = 'fD6(:çU)ç_è9jbnBE$YNLç=yuuNTyuln';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
connessione riuscita
