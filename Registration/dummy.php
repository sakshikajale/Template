

 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
  .background {
    background-image: url('template.jpeg');
    background-size: cover;
    background-position: center;
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
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      <h2>Registration Form</h2>
      <form id="registrationForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name"><br><br>
        <label for="birth_date">Birth Date:</label>
        <input type="date" id="birth_date" name="birth_date"><br><br>
          <label for="birth_place">Birth Place:</label>
        <input type="text" id="birth_place" name="birth_place"><br><br>
        <label for="birth_time">Birth Time:</label>
        <input type="text" id="birth_time" name="birth_time"><br><br>
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number"><br><br>

        <label for="marital_status">Marital Status:</label>
        <select id="marital_status" name="marital_status">
          <option value="single">Single</option>
          <option value="married">Married</option>
          <option value="divorced">Divorced</option>
        </select><br><br>
        <label for="caste">Caste:</label>
        <input type="text" id="caste" name="caste"><br><br>
        <label for="height">Height:</label>
        <input type="text" id="height" name="height"><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br><br>
    
        <label for="zodiac_sign">Zodiac Sign:</label>
        <input type="text" id="zodiac_sign" name="zodiac_sign"><br><br>
        <label for="education">Education:</label>
        <input type="text" id="education" name="education"><br><br>
        <label for="Profession">Profession:</label>
        <input type="text" id="Profession" name="Profession"><br><br>
        <label for="relative">Relative:</label>
        <input type="text" id="relative" name="relative"><br><br>
        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo"><br><br>

        <button class="btn btn-primary" type="submit" name="create">Submit</button>
      </form>   
    </div>
    <div class="col">
      <div class="A4 preview-container p container preview-container background text-center padding">
        <iframe class="preview-iframe" id="previewFrame" frameborder="0" style=" width:100%; height:70;"></iframe>
      </div>    
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script1.js"></script>
</body>
</html>

<?php
// Include database connection configuration
require_once('config.php');

// Check if the form is submitted
if(isset($_POST['create'])){
    // Retrieve form data
    $Name = $_POST['Name'];
    $birth_date = $_POST['birth_date'];
    $birth_place = $_POST['birth_place'];
    $birth_time = $_POST['birth_time'];
    $phone_number = $_POST['phone_number'];
    $marital_status = $_POST['marital_status'];
    $caste = $_POST['caste'];
    $height = $_POST['height'];
    $city = $_POST['city'];
    $zodiac_sign = $_POST['zodiac_sign'];
    $education = $_POST['education'];
    $Profession = $_POST['Profession'];
    $relative = $_POST['relative'];
    $photo = $_POST['photo']; // Assuming you store photo path in database

    // Prepare SQL query to insert data into user table
    $sql = "INSERT INTO user (Name, birth_date, birth_place, birth_time, phone_number, marital_status, caste, height, city, zodiac_sign, education, Profession, relative, photo) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);

    // Bind parameters and execute the statement
    $result = $stmt->execute([$Name, $birth_date, $birth_place, $birth_time, $phone_number, $marital_status, $caste, $height, $city, $zodiac_sign, $education, $Profession, $relative, $photo]);

    // Check if the query was successful
    if($result){
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data.";
    }
}
?>
