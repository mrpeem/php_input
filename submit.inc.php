<?php
  include_once 'db.inc.php';

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $sql = "INSERT INTO product (name, description, price) VALUES ('$name', '$description', '$price');";
  mysqli_query($conn, $sql);

  header("Location: /index.php?input=success");

  echo '<script type="text/javascript">history.go(-1);</script>';
  echo '<script type="text/javascript">alert("after");</script>';
