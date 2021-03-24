<?php
print_r($_POST);
$email = $_POST[email];
$password_user = $_POST[password];

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
$sql = $conn->query("SELECT * FROM `user` WHERE email = '$email'");
$result = $sql->fetch_assoc();
print_r($result);
if($password_user == $result["password"]){
    echo "masuk yeay!!!!";
}else{
    echo "sampah";
}

?>