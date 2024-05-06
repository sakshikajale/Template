<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Construct the preview HTML
    $previewHTML = "<h3>Preview:</h3>";
    $previewHTML .= "<p>Username: $username</p>";
    $previewHTML .= "<p>Email: $email</p>";
    $previewHTML .= "<p>Password: $password</p>";

    // Echo the preview HTML
    echo $previewHTML;
}
?>
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Preview</title>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .preview-container {
    width: 794px; /* A4 width in pixels */
    height: 1123px; /* A4 height in pixels */
    padding: 20px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
</style>
</head>
<body>
<div class="preview-container">
  <h3>Preview:</h3>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
      // Retrieve form data from the URL
      parse_str($_SERVER['QUERY_STRING'], $formData);
      
      // Display the preview
      if (!empty($formData['username'])) {
          echo "<p>Username: " . $formData['username'] . "</p>";
      }
      if (!empty($formData['email'])) {
          echo "<p>Email: " . $formData['email'] . "</p>";
      }
      if (!empty($formData['password'])) {
          echo "<p>Password: " . $formData['password'] . "</p>";
      }
  }
  ?>
</div>
</body>
</html>
