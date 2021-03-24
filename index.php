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
?>

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
      <a class="nav-link" href="insert_post.html">Add Post</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="insert_friend.php">Add Friend</a>
    </li>
  </ul>

</nav>

<div class="container">
    <div class="row">
  <div class="col-sm-4" style="margin-top: 20px;">
    <h3>Friendlist</h3>
        <?php
            $sql= $conn->query("SELECT name,cause FROM `friends`");
            echo '<ol>';
                while($result = $sql->fetch_assoc()){
                echo '<li>' . $result[name] . '</li>';
                }
        echo '</ol>';
        ?>
  </div>
  <div class="col-sm-8">
      <?php
        
        $sql= $conn->query("SELECT title, content FROM posting");
        while($hasil= $sql->fetch_assoc()){
            echo '<div class="card" style="margin-bottom: 5px; margin-top: 10px;">';
            echo '<div class="card-body">';
            echo '<h3 class="card-title">';
            echo $hasil[title];
            echo '</h3>';
            echo '<p class="card-text">';   
            echo $hasil[content];
            echo '</p>';
            echo '</div>';
            echo '</div>';
        }

        ?>
    </div>
    
  </div>
  </div>
</div>  
</body>

</html>