<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];    
        $Gender = $_POST["gender"];
        $num = $_POST["number"];
        $address = $_POST["add"];
        $gmail = $_POST["mail"];
        $password = $_POST["pass"];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail)){

            // $query = "insert into form (fname, lname, gender, cnum, address, email, password)
            // values('$firstname', '$lastname', ' $Gender', '$num', ' $address', '$gmail', '$password')"

            $query = "INSERT INTO form (fname, lname, gender, cnum, address, email, password)
                     VALUES ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";


            mysqli_query($con, $query);

            echo "<sript type='text/javascript'>alert('successfully Registered')</script>";
        }
        else{
            echo "<sript type='text/javascript'>alert('please enter some valid details')</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class ="signup">
        <h1>REGISTRATION FORM</h1>
        <form method="POST">
            <label><b>First Name</b></label>
            <input type="text" name="fname" required>
            <label><b>Last Name</b></label>
            <input type="text" name="lname" required>
            <label><b>Gender</b></label>
            <input type="text" name="gender" required>
            <label><b>Contact</b></label>
            <input type="tel" name="number" required>
            <label><b>Address</b></label>
            <input type="text" name="add" required>
            <label><b>Email</b></label>
            <input type="email" name="mail" required>
            <label><b>Password</b></label>
            <input type="password" name="pass" required>
            <input type="Submit" name="" value="Submit">
        </form>
        <p>By clicking the sign up button, you are agree to our<br>
        <a href="">Terms and conditions</a> and <a href="#">Policy Privacy</a>
        </p>
        <p>Alerady have an account? <a href="login.php">Login Here</a></p>
    </div>
</body>
</html>