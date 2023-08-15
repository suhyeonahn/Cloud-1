<?php
$host = 'mariadb'; // Use the service name of the MySQL container
$user = 'wp';
$password = 'pass';

$mysqli = new mysqli($host, $user, $password);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully!";
$mysqli->close();
?>
