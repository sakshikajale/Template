// $(document).ready(function(){
//   $('#username, #email, #password').on('input', function(){
//     var formData = $('#registrationForm').serialize();
//     $.ajax({
//       type: 'POST',
//       url: 'preview.php',
//       data: formData,
//       success: function(response){
//         $('#preview').html(response);
//       }
//     });
//   });
// });
$(document).ready(function(){
  $('#username, #email, #password').on('input', function(){
    var formData = $('#registrationForm').serialize();
    $('#previewFrame').attr('src', 'preview.php?' + formData);
  });
});
