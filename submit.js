function submit() {
  let name = $('#name').val();
  let description = $('#description').val();
  let price = $('#price').val();
  $.post('submit.inc.php', {name: name, description: description, price: price}, (data) => {
    $('#text').text('good good');
    $('#form')[0].reset();
  })
}