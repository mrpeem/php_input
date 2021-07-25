<?php
  include_once 'db.inc.php';
?>

<!DOCTYPE html>
<head>
</head>
<body>
  $conn;
  <form action="index.php" method="post">
    
    <div>
      <label for="name">Name</label>
      <input type="text" name="name">
    </div>

    <div>
      <label for="description">Description</label>
      <input type="text" name="description">
    </div>

    <div>
      <label for="price">Price</label>
      <input type="text" name="price">
    </div>

    <button type="submit"> Submit </button>
    


  </form>
</body>
</html>