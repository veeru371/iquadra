<?php
    // session_start();
    include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="hero">
        <div class="card">
            <h1>Profile Pic </h1>
            <p>Not have an account? <a href="login.php">Logout Here!</a></p>
            <img src="images/bannu.jpeg" id="profile-pic">
            <label for ="input-file">Update image</label>
            <input type="file" accept="image/jpeg, image/png,image/jpg" id="input-file">
        </div>
    </div>
    <script>
        let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange =   function(){
            profilePic.src= URL.createObjectURL(inputFile.files[0]);
        }
    </script>
</body>
</html>
