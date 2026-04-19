<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
</head>
<body>
    <div class="container" id="signupform">
    <div class="form-box">
        <h1 class="signup">Sign Up</h1>
    <div class="underline"><hr></div>

        <div class="input-form">
            <form action="" method="post">

                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-at"></i>
                    <input type="email" name="email" placeholder="Enter email address" required>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-unlock"></i>
                    <input type="password" name="pass" placeholder="Enter a password" minlength="6" maxlength="12" required>
                </div>
                <p><span class="suggestion">Already have an account? <a href="Signin.php">Sign In</a></span></p>
                

                </div>

                <div class="btn-field">
                    <button type="submit" name="btn" id="signupbtn">Sign Up</button>
                </div>

    </div>
    </div>
    </form>
</body>
</html>


<?php
    include "config.php";

    if(isset($_POST['btn']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $check = "SELECT * FROM info1 WHERE email='$email'";
        $result = mysqli_query($con,$check);
        if(mysqli_num_rows($result) >0){
            echo "<script>alert('Email already exists! Try with another email address!');</script>";
        }
        else{

        $insert_query = "INSERT INTO info1(Name,Email,Password) VALUES ('$name','$email','$pass')";
        $run = mysqli_query($con,$insert_query);

        if ($run)
        {
            echo "<script>alert('Data Saved Succesfully! Now click on signin!');</script>";
        }
        else
        {
            echo "<script>alert('Try Again');</script>";
        }
        }
    }
?>

