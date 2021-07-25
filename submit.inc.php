<?php
  include_once 'db.inc.php';

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $sql = "INSERT INTO product (name, description, price) VALUES ('$name', '$description', '$price');";
  mysqli_query($conn, $sql);

  // header("Location: /index.php?submit=success");
  echo '<script type="text/javascript">alert("Success");window.location.href="/index.php";</script>';

