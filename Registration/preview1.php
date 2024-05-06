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
      if (!empty($formData['Name'])) {
          echo "<p>Name: " . $formData['Name'] . "</p>";
      }
      if (!empty($formData['phone_number'])) {
          echo "<p>Phone Number: " . $formData['phone_number'] . "</p>";
      }
      if (!empty($formData['birth_date'])) {
          echo "<p>Birth Date: " . $formData['birth_date'] . "</p>";
      }
       if (!empty($formData['birth_place'])) {
          echo "<p>Birth Place: " . $formData['birth_place'] . "</p>";
      }
      if (!empty($formData['birth_time'])) {
          echo "<p>Birth Time: " . $formData['birth_time'] . "</p>";
      }
      if (!empty($formData['caste'])) {
          echo "<p>Caste: " . $formData['caste'] . "</p>";
      }
      if (!empty($formData['marital_status'])) {
          echo "<p>Marital Status: " . $formData['marital_status'] . "</p>";
      }
      if (!empty($formData['height'])) {
          echo "<p>Height: " . $formData['height'] . "</p>";
      }
      if (!empty($formData['city'])) {
          echo "<p>City: " . $formData['city'] . "</p>";
      }
     
      if (!empty($formData['zodiac_sign'])) {
          echo "<p>Zodiac Sign: " . $formData['zodiac_sign'] . "</p>";
      }
      if (!empty($formData['education'])) {
          echo "<p>Education: " . $formData['education'] . "</p>";
      }
      if (!empty($formData['Profession'])) {
          echo "<p>Profession: " . $formData['Profession'] . "</p>";
      }
      if (!empty($formData['relative'])) {
          echo "<p>Relative: " . $formData['relative'] . "</p>";
      }
      // Handle photo display here if needed
      if (!empty($formData['photo'])) {
         echo "<p>Photo:</p>";
        echo "<img class='photo' src='{$formData['photo']}' alt='Photo'>";
    }

  }
  ?>
</div>
</body>
</html>
