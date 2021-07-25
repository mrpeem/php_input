<?php
  include_once 'db.inc.php';

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  
  $num = mysqli_affected_rows($conn);
  echo "$num";
  $sql = "INSERT INTO product (name, description, price) VALUES ('$name', '$description', '$price');";
  mysqli_query($conn, $sql);
  
  



  header("Location: /index.php?input=success");

  $num = mysqli_affected_rows($conn);
  echo "$num";
  if ($sql) {
    echo "success";
  }
  else {
    echo "error";
  }