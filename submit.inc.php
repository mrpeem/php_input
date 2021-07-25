<?php
  include_once 'db.inc.php';

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $sql = "INSERT INTO product (name, description, price) VALUES ('$name', '$description', '$price');";
  mysqli_query($conn, $sql);

  header("Location: /index.php?input=success");

  echo "<script type='text/javascript'>
  $(document).ready(function(){   
     $('#text').text('new text');
  });
</script>";