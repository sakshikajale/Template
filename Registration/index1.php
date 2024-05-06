<?php
require_once('config.php');

if(isset($_POST['create'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$username, $email, $password]);

    if($result){
        echo "Successfully saved";
    } else {
        echo "There were errors while saving the data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
  .background {
    width: 210mm;
    height: 297mm;
    background-image: url('template.jpeg');
    background-size: cover;
    background-position: center;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
  }

  .preview-container {
    border: 1px solid #ccc; /* Add border to the preview container */
    border-radius: 10px; /* Optional: Add border radius for visual appeal */
    overflow: hidden; /* Hide any overflow content */
  }

  .preview-iframe {
    width: 2000px; /* Make the iframe responsive */
    height: 3000px; /* Set the height of the iframe */
    margin-top: 100px;
  }
  .padding{
    padding: 50px;
  }
  .A4{
    width: 210mm;
    height: 297mm;
    margin: 0 auto;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
</style>
</head>
<body>
<div class="row">
  <div class="container text-center" >
    <div class="col">
    <h2>Registration Form</h2>
    <form id="registrationForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <button class="btn btn-primary" type="submit" name="create">Submit</button>
    </form></div>
  </div>
<div class="col"></div>
  <!-- Container for the form preview -->
  <div class="col">
  <div class=" A4 container preview-container background  text-center padding">
    <h2>Form Preview</h2>
    <iframe class="preview-iframe" id="previewFrame" frameborder="0" ></iframe>
  </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
  .background {
    width: 210mm;
  height: 297mm;
  background-image: url('template.jpeg');
  background-size: cover;
  background-position: center;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
  }

  .preview-container {
    border: 1px solid #ccc; /* Add border to the preview container */
    border-radius: 10px; /* Optional: Add border radius for visual appeal */
    overflow: hidden; /* Hide any overflow content */
  }

  .preview-iframe {
    width: 2000px; /* Make the iframe responsive */
    height: 3000px; /* Set the height of the iframe */
    margin-top: 100px;
  }
  .padding{

    padding: 50px;
  }
  .A4{
   width: 210mm;
        height: 297mm;
        margin: 0 auto;
        
        border: 1px solid #ccc;
        box-sizing: border-box;
  }
</style>
</head>
<body>
    <div class="row">
<div class="container col-6 text-center" >
  <h2>Registration Form</h2>
  <form id="registrationForm">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
     <button class="btn btn-primary" type="submit" name="create">Submit</button>
  </form>
</div>


<div class="A4 container preview-container background  text-center padding">
  <h2>Form Preview</h2>
  <iframe class="preview-iframe" id="previewFrame" frameborder="0" ></iframe>
</div>
  
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html> -->
