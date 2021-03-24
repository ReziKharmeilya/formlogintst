<?php
$servername = "localhost";
$username = "intensif";
$password = "itsSoIntense!1";
$db = "intensif_sosmed";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
print_r($_POST);

$username= $_POST[username];
$password= $_POST[password];
$email= $_POST[email];

$conn->query("INSERT INTO user (username, password, email) VALUES ('$username', '$password','$email')");

?>