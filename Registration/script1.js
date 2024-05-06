// $(document).ready(function() {
//   var templateSrc = 'template.jpeg'; // Update with your template image path

//   // Set the background image of the iframe
//   $('#previewFrame').contents().find('body').css('background-image', 'url(' + templateSrc + ')');

//   // Update the preview dynamically
//   $('#firstname, #lastname, #birthdate, #phone_number, #birthplace').on('input', function() {
//     var formData = $('form').serialize();
//     $.ajax({
//       type: 'POST',
//       url: 'preview.php',
//       data: formData,
//       success: function(response) {
//         $('#previewFrame').contents().find('#previewContainer').html(response).css({
//           'color': 'blue',  // Set color to blue
//           'font-weight': 'bold' // Set font weight to bold
//         });
//       }
//     });
//   });
// });
$(document).ready(function(){
  $('#Name, #phone_number, #birth_date,  #birth_place, #birth_time,#caste, #marital_status, #height, #city, #birthplace, #birth_time, #zodiac_sign, #education, #Profession, #relative, #photo').on('input', function(){
    var formData = $('#registrationForm').serialize();
    $('#previewFrame').attr('src', 'preview1.php?' + formData);
  });
});
