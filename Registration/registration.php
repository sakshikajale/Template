<?php
require_once('config.php');

if(isset($_POST['create'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone_number'];
    $password = $_POST['password'];

	$sql = "INSERT INTO users (firstname, lastname, email, phone_number, password) VALUES (?, ?, ?, ?, ?)";
	$stmtinsert = $db->prepare($sql);
	$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);

    if($result){
        echo "Successfully saved";
    } else {
        echo "There were errors while saving the data";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1>Make my Biodata</h1>
                <p>Fill up the Form</p>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" type="text" name="firstname" required>

                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" type="text" name="lastname" required>

                    <label for="email"><b>Email</b></label>
                    <input class="form-control" type="email" name="email" required>

                    <label for="phone_number"><b>Phone Number</b></label>
                    <input class="form-control" type="text" name="phone_number" required>

                    <label for="password"><b>Password</b></label>
                    <input class="form-control" type="password" name="password" required>

                    <button class="btn btn-primary" type="submit" name="create">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
