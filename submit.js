$('#testbtn').click(() => {
  alert("testing testing");
})

// $("#submit").click(() => {
//   alert('fuck');
//   let name = $('#name').val();
//   let description = $('#description').val();
//   let price = $('#price').val();
//   $.post('submit.inc.php', {name: name, description: description, price: price}, (data) => {
//     $('#text').text('good good');
//     $('#form')[0].reset();
//   })
// });

$('#form').submit((e) => {
  $.ajax({
      type:"POST", // define method post or get
      url:$('#form').attr('action'), // gets the post url from your action attribute
      data:$('#form').serialize(), // binds your form data
      dataType:'json', // server response data type, use 'html' 'json' etc
      encode:true,
      success: (data) => {
      },
      error:( xhr, status, errorThrown ) => {
        alert( "Sorry, there was a problem!" );
        console.log( "Error: " + errorThrown );
        console.log( "Status: " + status );
        console.dir( xhr );
      },
  });
   e.preventDefault(); // prevents from going to the posting url
});