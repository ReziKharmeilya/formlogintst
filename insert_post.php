<?php
$title = $_POST[title];
$content = $_POST[content];
$author = $_POST[author];

$servername = "localhost";
$title__ = "intensif";
$content__ = "itsSoIntense!1";
$db = "intensif_sosmed";

// Create connection
$conn = mysqli_connect($servername, $title__, $content__, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->query("INSERT INTO posting (title,content,author) VALUES ('$title','$content','$author')" );
















?>