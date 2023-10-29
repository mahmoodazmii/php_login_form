<?php
   session_start();

   include("db.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $email = $_POST['email'];
    $password = $_POST['Pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
       $query = "select * from form where email = '$gmail' limit 1";
       $result = mysqli_query($con, $query);
       
       if($result && mysqli_num_rows($result) >0)
       {
        $user_data = mysqli_fatch_assoc($result);

        if($user_data['pass'] == $password)
        {
            header("location: index.php");
            die;
        }
       }
    }
    
    echo "<script type='text/javascript'> alert('wrong username or password')</script>";
   }
   else{
    echo "<script type='text/javascript'> alert('wrong username or password')</script>";
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
    <div class ="login">
        <h1>Login</h1>
        <form method="POST">
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" required><br><br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Not have an account? <a href="signup.php">Sign Up here</a></p>
</body>
</html> 