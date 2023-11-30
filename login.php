<?php
    session_start();
    include("db.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail)){

            $query= "select * from form where email='$gmail' limit 1";
            $result =  mysqli_query($con, $query);

            if($result){
                if($result && mysqli_num_rows($result)>0){

                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password']==$password){
                        header("locaction:index.php");
                        die;
                    }
                }
            }
            echo "<sript type='text/javascript'>alert('worng user name of password')</script>";
        }
        else{
            echo "<sript type='text/javascript'>alert('worng user name of password')</script>";
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
    <div class ="login">
        <h1 id="lg">Login</h1>
        <form method="POST">
            <label><b>Email</b></label>
            <input type="email" name="mail" required>
            <label><b>Password</b></label>
            <input type="password" name="pass" required>
            <input type="Submit" name="" value="Submit">
        </form>
        <p>Not have an account? <a href="signup.php">Sign up here</a></p>
    </div>
    
</body>
</html>