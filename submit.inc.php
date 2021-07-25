<?php
  include_once 'db.inc.php';

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $sql = "INSERT INTO product (name, description, price) VALUES ('$name', '$description', '$price');";
  mysqli_query($conn, $sql);

  if ($sql) {
    echo '<script type="text/javascript">alert("Success");window.location.href="/index.php";</script>';  
  }
  else {
    echo '<script type="text/javascript">alert("Error");window.location.href="/index.php";</script>';
  }
  

