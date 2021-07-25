<!DOCTYPE html>
<head>
  <!-- jQuery library -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script> 

  <script type="text/javascript" src="submit.js"></script>
</head>
<body>
  $conn;
  <form id="form" action="submit.inc.php" method="post">
    <div>
      <label for="name">Name</label>
      <input type="text" name="name" required>
    </div>
    <div>
      <label for="description">Description</label>
      <input type="text" name="description" required>
    </div>
    <div>
      <label for="price">Price</label>
      <input type="number" step="any" name="price" required>
    </div>
    <button type="submit" name="submit" onclick="submit();"> Submit </button>
  </form>

  <p id="text"> test text </p>
</body>
</html>