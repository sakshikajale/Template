$(document).ready(function() {
  var templateSrc = 'template.jpeg'; // Update with your template image path

  // Set the background image of the iframe
  $('#previewFrame').contents().find('body').css('background-image', 'url(' + templateSrc + ')');

  // Update the preview dynamically
  $('#username, #email, #password').on('input', function() {
    var formData = $('#registrationForm').serialize();
    $('#previewFrame').contents().find('#previewContainer').html('<div>Loading...</div>'); // Show loading message
    $.ajax({
      type: 'POST',
      url: 'preview.php',
      data: formData,
      success: function(response) {
        $('#previewFrame').contents().find('#previewContainer').html(response);
      }
    });
  });
});
