<?php
   session_start();

   include("db.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $firstname = $_POST['fname'];
    $lastname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['Pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form (fname, lname, email, num, pass) values ('$firstname', '$lastname','$email', '$number', '$password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
    }
   }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class ="signup">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Age</label>
            <input type="number" placeholder="Enter Age" required> 
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" required><br><br><br>
            <input type="date" required>
            <label>Contact Number</label>
            <input type="tel" placeholder="Enter phone No" required><br><br><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Upload Image" name="submit">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our<br>
        <a href="">Terms and Condition</a> and <a href="a">Policy privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>
    
</body>
</html>