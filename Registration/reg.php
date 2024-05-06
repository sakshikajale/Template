<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form with Template Preview</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <div class="form-container">
    <h2>Registration Form</h2>
    <form id="registrationForm">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
    </form>
  </div>
  <div class="template-container">
    <h2>Template Preview</h2>
    <div id="templatePreview"></div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
