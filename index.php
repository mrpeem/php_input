<!DOCTYPE html>
<head>
  <!-- jQuery library -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script> 
</head>
<body>
  <button id="testbtn"> test btn </button>

  <form id="form">
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
    <button id="submit" type="submit" name="submit"> Submit </button>
    <!-- <script type="text/javascript">
      $('#testbtn').click(() => {
        alert("testing testing");
      })

      $("#submit").click(() => {
        alert('fuck');
        let name = $('#name').val();
        let description = $('#description').val();
        let price = $('#price').val();
        $.post('submit.inc.php', {name: name, description: description, price: price}, (data) => {
          $('#text').text('good good');
          $('#form')[0].reset();
        })
      });
    </script> -->
  </form>

  <p id="text"> test text </p>

  <script type="text/javascript" src="submit.js"></script>
</body>
</html>