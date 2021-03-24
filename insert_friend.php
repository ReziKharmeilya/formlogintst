<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/sosmed">Home</a>
    </li>
  </ul>

</nav>

<div class="container">
<h1>A friend form</h1>
<form method="post">
    Name:
    <input class="form-control" type="text" name="name"/>
    <br>
    Why do you want to be my friend
    <input class="form-control" type="text" name="cause"/>
    <br>
    <button class="btn btn-primary" type="submit">Plus One Friend!</button>
</form>
</div>  
</body>
</html>

<?php
$afriendname= $_POST[name];
$areason=$_POST[cause];

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

$conn->query("INSERT INTO friends (name, cause) VALUES ('$afriendname', '$areason')");
?>