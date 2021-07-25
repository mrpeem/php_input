<?php
  include_once 'db.inc.php';

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  printf(mysql_affected_rows($conn));
  $sql = "INSERT INTO product (name, description, price) VALUES ('$name', '$description', '$price');";
  mysqli_query($conn, $sql);
  printf(mysql_affected_rows($conn));

  header("Location: /index.php?input=success");