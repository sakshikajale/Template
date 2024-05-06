<?php
// Display the submitted form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  echo "<p>Username: $username</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Password: $password</p>";

  // Include the template image (assuming you've uploaded it in a folder named "templates")
  echo "<img src='Registration/template.jpeg' alt='Template Image'>";
}
?>
