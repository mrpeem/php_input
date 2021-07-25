<!DOCTYPE html>
<head>
</head>
<body>
  $conn;
  <form action="submit.inc.php" method="post">
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
    <button type="submit" name="submit"> Submit </button>
    <script type="text/javascript">
      $('#submit').click((e) => {
        e.preventDefault();
        return fase;
      });
    </script>
  </form>

  <p id="text"> test text </p>
</body>
</html>